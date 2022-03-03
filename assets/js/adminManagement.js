function checkTask(element, decoration ,color){
    element.style.textDecoration = decoration;
    element.style.color = color;
    document.getElementById('tasksCount').innerText = document.getElementsByClassName('validated').length;
 }
 
 let addButton = document.getElementById('addButton');
 let removeButton = document.getElementById('removeButton');
 let addNewTask = document.getElementById('addNewTask');
 let list = document.getElementById('list');
 
 addButton.onclick = () => {
    let li = document.createElement('li');
    li.innerText = addNewTask.value;
    list.appendChild(li);
    addNewTask.value = '';
    li.onclick = () => {
       if (!li.classList.contains('validated')) {
       li.classList.add('validated');
       li.style.textDecoration = 'line-through';
       li.style.color = 'green';
    } else {
       li.classList.remove('validated');
       li.style.textDecoration = 'none';
       li.style.color = 'inherit';
    }
 }
 }
 
 removeButton.onclick = () => {
    let tasksDone = document.getElementsByClassName('validated');
    for(let task of tasksDone){
       task.remove();
    }
 }