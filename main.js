// get paraent List
const allTasks = document.querySelector('#book-list ul');

let searchBar =document.forms['search-books'].querySelector('input[type="text"]');
console.log(searchBar);
const completeTask = document.querySelector('#complete-list');

// delete list 
function deleleList(){
	const btnDel = document.querySelectorAll(".delete");
	// for(let i=0; i<btnDel.length;i++){
	// 	console.log(btnDel[i]);
	// 	
	

	for(let btn of btnDel) {
		btn.addEventListener('click', (e) => {
			let rec = e.target.parentNode;
			
			let allRec = rec.parentNode;
			
			allRec.removeChild(rec);
		})
	};
	}
	
	deleleList()
// Add new task (FORM)

	const addForm = document.forms['add-list'];
	addForm.addEventListener('submit',function(e) {
		// console.log("doing click");
		e.preventDefault();
		let existed;
		const newTask = addForm.querySelector('input[type="text"]').value;
		
		let allTask = allTasks.getElementsByClassName('name')
		
		for(let i=0 ; i < allTask.length ; i++){
			let allTaskVal = allTask[i].innerHTML.toLowerCase();
			let newTaskVal = newTask.toLowerCase();
			allTask[i].innerHTML == newTask ? existed = true : existed = false
		}

		if(existed){
			alert('Value is Existed')
		} else {
          	// create elements (li span span)
		const taskRow = document.createElement('li');
	
		taskRow.innerHTML="<span class='name'>"+ newTask +"</span><span class='delete'>delete</span>";

		// const newTaskName = document.createElement('span');
		// const deleteTask = document.createElement('span');

		// // set value
		// newTaskName.textContent=newTask;
		// deleteTask.textContent='delete';

		// // set style 
		// newTaskName.classList.add('name');
		// deleteTask.classList.add('delete');

		// // append chile node
		// taskRow.appendChild(newTaskName);
		// taskRow.appendChild(deleteTask);

				allTasks.appendChild(taskRow);
				deleleList()
		}
			
		
		
	
		
		

		
	
	});

	const arrow = document.querySelector("#complete-list .material-icons");
	arrow.addEventListener('click', function(e){
		let currentArrow = e.target.textContent;
		if (e.target.textContent == 'expand_more'){
			e.target.textContent = 'expand_less';
		}else {
			e.target.textContent = 'expand_more';
		}

		
		if(completeTask.classList.contains('hidden')){
			completeTask.classList.remove('hidden');

		}else{
			completeTask.classList.add('hidden');
		}
	});

	archBar.addEventListener('keyup', function(e) {
	
		let searchKey = e.target.value.toLowerCase();
		let books = bookLists.querySelectorAll('.name');
		console.log(books);
		books.forEach(function(book) {
			let bookTitle=book.textContent.toLowerCase();
			if(bookTitle.includes(searchKey) == true) {
				book.parentElement.style.display='block';
	
			}else{
				book.parentElement.style.display ='name';
			}
		});
	
	});