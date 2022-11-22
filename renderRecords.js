let list = JSON.parse(localStorage.getItem('collection'));
console.log(list);

const parent = document.getElementById('tableBody');


function addChild (id, size, quantity){
    let container =  document.createElement('tr');
    let itemOne = document.createElement('th');
    let itemTwo = document.createElement('th');
    let itemThree = document.createElement('th');
    itemOne.textContent = id;
    itemTwo.textContent = size;
    itemThree.textContent = quantity;

    itemOne.scope = 'col';


 parent.appendChild(container);
 container.appendChild(itemOne);
 container.appendChild(itemTwo);
 container.appendChild(itemThree);
};

if (list){
    list.forEach((item)=>{

        addChild(item.id, item.size, item.quantity);

    });

}

