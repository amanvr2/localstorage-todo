console.log('js loaded');

const arr=[];

var taskNo = localStorage.getItem('taskNo');
for(var i=1;i<=taskNo;i++){

var datas = JSON.parse(window.localStorage.getItem('task-'+i));
arr.push(datas);
}



buildTable(arr);



function buildTable(data){

    console.log(data);

    

    var table = document.getElementById('my');

    for (var i = 0; i < data.length; i++){
        var row = `<tr>
            <td>${i}</td>
            <td>${data[i].title}</td>
            <td>${data[i].description}</td>
                                  
                  </tr>`
        table.innerHTML += row


    }
}



function addTask(){

    var taskNo = localStorage.getItem('taskNo');
    if (taskNo === null) {
        taskNo = 0;
    }
    taskNo++;

    localStorage.setItem("taskNo", taskNo);

    var title = document.getElementById('title').value;
    var description = document.getElementById('description').value;

    const task = {

        taskId:taskNo,
        title:title,
        description:description,
    }

    window.localStorage.setItem('task-'+taskNo, JSON.stringify(task));

    location.reload()
    
}


