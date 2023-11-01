$(() => {
    const regexEmail = /^\w+\@\w+\.\D+$/
    const regexNumber = /^\d/
    const regexAlpha = /^\D/

    $('.form-register').on('submit', function(e) { 
        let response = validateForm($(this), $('.register-input'))
        if (!response) { e.preventDefault() } 
    })

    $('.form-payment').on('submit', function(e) {
        let response = validateForm($(this), $('.address-input'))
        if ($('#payment-form-select').val() != 'pix') { response = validateForm($(this), $('.card-input')) }
        if (!response) { e.preventDefault() }
    })

    $('#user-name').on('input', () => { validateBlankField($('#user-name'), $('#user-name').val(), $('.feedback')) })

    $('#email').on('input', () => {
        const feedbackEmail = $('.feedback-email')
        const input = $('#email')
        const inputValue = $('#email').val()

        if (inputValue.match(regexEmail)) {
            setValidFeedback(input, 'Tudo certo!', feedbackEmail)
        } else {
            setInvalidFeedback(input, 'Tente um e-mail válido!', feedbackEmail)
        }
    })

    $('#password').on('input', () => {
        const feedbackPassword = $('.feedback-password')
        const input = $('#password')
        const inputValue = $('#password').val()

        if (inputValue.length > 8) {
            setValidFeedback(input, 'Tudo certo!', feedbackPassword)
        } else {
            setInvalidFeedback(input, 'Sua senha precisa ter no mínimo 8 caracteres', feedbackPassword)
        }
    })

    $('#password2').on('input', () => {
        const feedbackPassword = $('.feedback-password2')
        const input = $('#password2')
        const inputValue = $('#password2').val()

        if (inputValue.length > 8) {
            setValidFeedback(input, 'Tudo certo!', feedbackPassword)

            if (inputValue != $('#password').val()) {
                setInvalidFeedback(input, 'As senhas não conferem!', feedbackPassword)
            } 
        } else {
            setInvalidFeedback(input, 'Sua senha precisa ter no mínimo 8 caracteres', feedbackPassword)
        }
    })

    $('.password-btn').on('click', () => { passwordBtnOnChange($('.password-btn'), $('#password')) })
    $('.password-btn2').on('click', () => { passwordBtnOnChange($('.password-btn2'), $('#password2')) })

    /*payment form*/
    $('#street').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-street')) })

    $('#street-number').on('input', function() { 
        if (regexAlpha.test($(this).val())) { $(this).val('') }
        validateBlankField($(this), $(this).val(), $('.feedback-street-number')) 
    })

    $('#district').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-district')) })

    $('#zip-code').on('input', function() { 
        const field = $(this)
        const feedbackDiv = $('.feedback-zip-code')
        const maskNumber = 9

        if (regexAlpha.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'CEP inválido!', 'Tudo certo!', feedbackDiv)
    })

    $('#state').on('input', function() { 
        const field = $(this)
        const feedbackDiv = $('.feedback-state')
        const maskNumber = 2

        if (regexNumber.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'UF inválida!', 'Tudo certo!', feedbackDiv)
    })

    $('#city').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-city')) })

    $('#cardholder-name').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-cardholder-name')) })

    $('#card-number').on('input', function() { 
        const field = $(this)
        const feedbackDiv = $('.feedback-card-number')
        const maskNumber = 19

        if (regexAlpha.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'Esse número de cartão está inválido!', 'Tudo certo!', feedbackDiv)
    })

    $('#security-code').on('input', function() { 
        const field = $(this)
        const feedbackDiv = $('.feedback-security-code')
        const maskNumber = 3

        if (regexAlpha.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'Código de segurança incorreto!', 'Tudo certo!', feedbackDiv)
    })

    $('#expiration-date').on('input', function() { 
        const field = $(this)
        const feedbackDiv = $('.feedback-expiration-date')
        const maskNumber = 7
        let month = parseInt(field.val().substring(0,2))
        let fullDate = new Date()
        let fullYear = fullDate.getFullYear()
        let year = parseInt(field.val().substring(3,7))

        if (regexAlpha.test(field.val())) { field.val('') }

        if (field.val().length == 0) {
            setInvalidFeedback(field, 'Esse campo é obrigatório!', feedbackDiv) 
        } else {
            if (month >= 1 && month <= 12) {
                setValidFeedback(field, 'Tudo certo!', feedbackDiv)
    
                if (year > fullYear) {
                    setValidFeedback(field, 'Tudo certo!', feedbackDiv)
                    validateJMask(field, field.val(), maskNumber, 'Data incorreta', 'Tudo certo!', feedbackDiv)
                } else {
                    setInvalidFeedback(field, 'Esse ano que informou está incorreto', feedbackDiv)
                }
            } else {
                setInvalidFeedback(field, 'Esse mês que informou está incorreto', feedbackDiv)
            }
        }
    })

    const setValidFeedback = (field, message, feedbackDiv) => {
        field.removeClass('is-invalid').addClass('is-valid')
        feedbackDiv.text(message)
        feedbackDiv.removeClass('text-danger').addClass('text-success fw-bolder')
    }

    const setInvalidFeedback = (field, message, feedbackDiv) => {
        field.removeClass('is-valid').addClass('is-invalid')
        feedbackDiv.text(message)
        feedbackDiv.removeClass('text-success').addClass('text-danger fw-bolder')
    }

    const validateBlankField = (field, fieldValue, feedbackDiv) => {
        if (fieldValue.length == 0) {
            setInvalidFeedback(field, 'Esse campo é obrigatório!', feedbackDiv)
        } else {
            setValidFeedback(field, 'Tudo certo!', feedbackDiv)
        }
    }

    const validateJMask = (field, fieldValue, maskNumber, invalidMsg, validMsg, feedbackDiv) => {
        if (fieldValue.length > 0 && fieldValue.length < maskNumber) {
            setInvalidFeedback(field, invalidMsg, feedbackDiv)
        } else if (fieldValue.length == maskNumber) {
            setValidFeedback(field, validMsg, feedbackDiv)
        }
    }

    const passwordBtnOnChange = (btn, input) => {
        btn.html('')

        if (btn.hasClass('password-hidden')) {
            btn.removeClass('password-hidden').addClass('password-visible')
            btn.html('<i class="bi bi-eye-fill"></i>')
            input.prop('type', 'text')
        } else {
            btn.removeClass('password-visible').addClass('password-hidden')
            btn.html('<i class="bi bi-eye-slash-fill"></i>')
            input.prop('type', 'password')
        }
    }

    const validateForm = (form, input) => {
        let isValid = true

        form.find(input).each(function() {
            if (($(this).val().length == 0) || ($(this).hasClass('is-invalid'))) {
                isValid = false
            }
        })

        return isValid
    }
})