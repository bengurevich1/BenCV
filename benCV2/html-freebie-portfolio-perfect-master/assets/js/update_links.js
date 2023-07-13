window.onload = function() {
    fetch('project_links.json')
        .then(response => response.json())
        .then(data => {
            for(let id in data) {
                let link = document.querySelector('#' + id + ' .modal-footer .btn');
                link.href = data[id];
            }
        })
        .catch(error => console.error('Error:', error));
};
