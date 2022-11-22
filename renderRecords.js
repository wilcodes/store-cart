let list = JSON.parse(localStorage.getItem('collection'));
console.log(list);

const parent = document.getElementById('tableBody');


function addChild (id, size, quantity){
    const container =  document.createElement('tr');
    const node1 = document.createElement('th');
    const node2 = document.createElement('th');
    const node3 = document.createElement('th');
    const node4 = document.createElement('th');
    const button = document.createElement('button');

    node1.textContent = id;
    node2.textContent = size;
    node3.textContent = quantity;

    node1.scope = 'col';
    button.textContent = 'Delete record';
    button.className = 'btn btn-danger';
    button.data = id;
 parent.appendChild(container);
 container.appendChild(node1);
 container.appendChild(node2);
 container.appendChild(node3);

 container.appendChild(node4);
 node4.appendChild(button);
};

if (list){
    list.forEach((item)=>{

        addChild(item.id, item.size, item.quantity);

    });

}


const buttonNode = document.querySelectorAll('.btn.btn-danger');
buttonNode.forEach(button=>{
    button.addEventListener('click', (e) =>{
        console.log(e.target.data);
    })
})


