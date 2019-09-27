let checkboxes = document.querySelectorAll('.checkbox')
checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('change', async function(e) {
        const url = '/updateToDo';
        const data = {taskId: this.value};

        try {
            const response = await fetch(url, {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(data), // data can be `string` or {object}!
                headers: {
                    'Content-Type': 'application/json'
                }
            });
            const json = await response.json();
            console.log(json);
        } catch (error) {
            console.error('Error:', error);
        }
    })
})
checkboxes.forEach( function (checkbox) {
    checkbox.addEventListener('change', function(e){
        if(checkbox.checked === true ){
            document.querySelector('.completed-tasks').innerHTML += checkbox.previousElementSibling.innerHTML
            this.innerHTML = ''
            this.previousElementSibling.innerHTML = ''
        }
    })
})

