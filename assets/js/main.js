$(() => {
    const regexEmail = /^\w+\@\w+\.\D+$/
    const regexNumber = /^\d/
    const regexAlpha = /^\D/
    const successMsg = 'Tudo certo!'

    $('.form-register').on('submit', function(e) { 
        let response = validateForm($(this), $('.register-input'))
        if (!response) { e.preventDefault() } 
    })

    $('.form-payment').on('submit', function(e) {
        let response = validateForm($(this), $('.address-input'))
        if ($('#payment-form-select').val() != 'pix') { response = validateForm($(this), $('.form-payment input')) }
        if (!response) { e.preventDefault() }
    })

    $('#user-name').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback')) })

    $('#email').on('input', () => {
        let feedbackEmail = $('.feedback-email')
        let input = $('#email')
        let inputValue = input.val()

        if (inputValue.match(regexEmail)) {
            setValidFeedback(input, successMsg, feedbackEmail)
        } else {
            setInvalidFeedback(input, 'Tente um e-mail válido!', feedbackEmail)
        }
    })

    $('#password-login').on('input', function() {
        if ($(this).val().length > 8) {
            setValidFeedback($(this), successMsg, $('#feedback-password-login'))
        } else {
            setInvalidFeedback($(this), 'Sua senha precisa ter no mínimo 8 caracteres', $('#feedback-password-login'))
        }
    })
    $('#password').on('input', function() { validatePassword($(this), $(this).val(), $('.feedback-password')) })
    $('#password2').on('input', function() { validatePassword($(this), $(this).val(), $('.feedback-password2')) })
    $('.password-btn').on('click', function() { passwordBtnOnChange($(this), $('#password')) })
    $('.password-btn2').on('click', function() { passwordBtnOnChange($(this), $('#password2')) })

    /*payment form*/
    $('#street').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-street')) })

    $('#street-number').on('input', function() { 
        if (regexAlpha.test($(this).val())) { $(this).val('') }
        validateBlankField($(this), $(this).val(), $('.feedback-street-number')) 
    })

    $('#district').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-district')) })

    $('#zip-code').on('input', function() { 
        let field = $(this)
        let feedbackDiv = $('.feedback-zip-code')
        const maskNumber = 9

        if (regexAlpha.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'CEP inválido!', successMsg, feedbackDiv)
    })

    $('#state').on('input', function() { 
        let field = $(this)
        let feedbackDiv = $('.feedback-state')
        const maskNumber = 2

        if (regexNumber.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'UF inválida!', successMsg, feedbackDiv)
    })

    $('#city').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-city')) })

    $('#cardholder-name').on('input', function() { validateBlankField($(this), $(this).val(), $('.feedback-cardholder-name')) })

    $('#card-number').on('input', function() { 
        let field = $(this)
        let feedbackDiv = $('.feedback-card-number')
        const maskNumber = 19

        if (regexAlpha.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'Esse número de cartão está inválido!', successMsg, feedbackDiv)
    })

    $('#security-code').on('input', function() { 
        let field = $(this)
        let feedbackDiv = $('.feedback-security-code')
        const maskNumber = 3

        if (regexAlpha.test(field.val())) { field.val('') }
        validateBlankField(field, field.val(), feedbackDiv) 
        validateJMask(field, field.val(), maskNumber, 'Código de segurança incorreto!', successMsg, feedbackDiv)
    })

    $('#expiration-date').on('input', function() { 
        let field = $(this)
        let feedbackDiv = $('.feedback-expiration-date')
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
                setValidFeedback(field, successMsg, feedbackDiv)
    
                if (year > fullYear) {
                    setValidFeedback(field, successMsg, feedbackDiv)
                    validateJMask(field, field.val(), maskNumber, 'Data incorreta', successMsg, feedbackDiv)
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
            setValidFeedback(field, successMsg, feedbackDiv)
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

    const validatePassword = (field, fieldValue, feedbackDiv) => {
        let passwordField = $('#password')
        let passwordFieldValue = passwordField.val()
        let passwordDivFeedback = $('.feedback-password')
        let password2Field = $('#password2')
        let password2FieldValue = password2Field.val()
        let password2DivFeedback = $('.feedback-password2')

        if (fieldValue.length > 8) {
            setValidFeedback(field, successMsg, feedbackDiv)
            if (passwordFieldValue != password2FieldValue) {
                setInvalidFeedback(passwordField, 'As senhas não conferem!', passwordDivFeedback)
                setInvalidFeedback(password2Field, 'As senhas não conferem!', password2DivFeedback)
            } else {
                setValidFeedback(passwordField, successMsg, passwordDivFeedback)
                setValidFeedback(password2Field, successMsg, password2DivFeedback)
            }
        } else {
            setInvalidFeedback(field, 'Sua senha precisa ter no mínimo 8 caracteres', feedbackDiv)
        }
    }
})