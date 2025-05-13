        function mostrarCampo(select) {
            const camp = document.getElementById('camp-other');
            const otherInput =document.getElementById('other-text');
            if (select.value === 'other') {
                camp.style.display = 'block';
                otherInput.setAttribute('required','required');
            } else {
                camp.style.display = 'none';
                otherInput.removeAttribute('required');
                document.getElementById('other-text').value = '';
            }
        }