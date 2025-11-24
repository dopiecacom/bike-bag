document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');

    function closeAnswer(answer, icon) {
        answer.style.maxHeight = '0px';
        answer.classList.remove('mt-4');
        answer.classList.add('mt-0');
        if (icon) {
            icon.classList.remove('rotate-180');
        }
    }

    function openAnswer(answer, icon) {
        answer.style.maxHeight = '0px';
        answer.classList.remove('mt-0');
        answer.classList.add('mt-4');
        if (icon) {
            icon.classList.add('rotate-180');
        }
        
        requestAnimationFrame(function() {
            answer.style.maxHeight = answer.scrollHeight + 'px';
        });
    }

    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            const isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            // Close all other FAQs
            document.querySelectorAll('.faq-answer').forEach(ans => {
                if (ans !== answer) {
                    closeAnswer(ans, ans.previousElementSibling.querySelector('.faq-icon'));
                }
            });

            // Toggle current FAQ
            if (isOpen) {
                closeAnswer(answer, icon);
            } else {
                openAnswer(answer, icon);
            }
        });
    });
});
