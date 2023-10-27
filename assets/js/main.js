$(() => {
    const regexEmail = /^\w+\@\w+\.\D+$/

    $('form').on('submit', (e) => {
        if (!($('form input').hasClass('is-valid'))) {
            e.preventDefault()
        }
    })

    $('#user-name').on('input', () => {
        const feedback = $('.feedback')
        const input = $('#user-name')
        const inputValue = $('#user-name').val()

        if (inputValue.length > 0) {
            setValidFeedback(input, 'Tudo certo!', feedback)
        } else {
            setInvalidFeedback(input, 'Esse campo é obrigatório!', feedback)
        }
    })

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

    $('.password-btn').on('click', () => { passwordBtnOnChange($('.password-btn'), $('#password')) })
    $('.password-btn2').on('click', () => { passwordBtnOnChange($('.password-btn2'), $('#password2')) })

    const passwordBtnOnChange = (btn, input) => {
        if (btn.hasClass('password-hidden')) {
            btn.removeClass('password-hidden').addClass('password-visible')
            btn.html('')
            btn.html('<i class="bi bi-eye-fill"></i>')
            input.prop('type', 'text')
        } else {
            btn.removeClass('password-visible').addClass('password-hidden')
            btn.html('')
            btn.html('<i class="bi bi-eye-slash-fill"></i>')
            input.prop('type', 'password')
        }
    }
})