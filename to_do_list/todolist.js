const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");

function addTask() {
    const task = inputBox.value.trim();

    if (task === '') {
        alert("You must write something!");
    } else {
        const li = document.createElement("li");
        li.innerHTML = task;
        listContainer.appendChild(li);
        const span = document.createElement("span");
        span.innerHTML = "\u00d7";
        li.appendChild(span);

        // Panggil fungsi untuk menyimpan tugas ke dalam database di sini
        saveTaskToDatabase(task);

        span.addEventListener("click", function(e) {
            const taskId = e.target.parentElement.dataset.taskId; // Ambil ID tugas dari data-
            e.target.parentElement.remove();
            deleteTaskFromDatabase(taskId); // Hapus tugas dari database dengan ID yang sesuai
        });
        // span.addEventListener("click", function(e) {
        //     e.target.parentElement.remove();

        //     // Panggil fungsi untuk menghapus tugas dari database di sini
        //     deleteTaskFromDatabase(task); // Perlu disesuaikan dengan pengiriman ID yang benar
        // });
    }
    inputBox.value = "";
}

listContainer.addEventListener("click", function(e) {
    if (e.target.tagName === "LI") {
        e.target.classList.toggle("checked");
    } else if (e.target.tagName === "SPAN") {
        e.target.parentElement.remove();
    }
}, false);

// Fungsi untuk menyimpan tugas ke dalam database
function saveTaskToDatabase(task) {
    fetch('add_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `task=${encodeURIComponent(task)}`,
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Tampilkan pesan hasil operasi
        if (data === "Task added successfully!") {
            fetchTasks(); // Memuat ulang daftar tugas setelah penambahan
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Fungsi untuk menghapus tugas dari database
// Fungsi untuk menghapus tugas dari database berdasarkan ID
function deleteTaskFromDatabase(taskId) {
    fetch('delete_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `task_id=${encodeURIComponent(taskId)}`,
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Tampilkan pesan hasil operasi
        if (data === "Task deleted successfully!") {
            fetchTasks(); // Memuat ulang daftar tugas setelah penghapusan
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


// Fungsi untuk mengambil daftar tugas dari database
function fetchTasks() {
    // Mengambil daftar tugas dari database dan menambahkan elemen HTML sesuai dengan data yang diterima
    // Contoh: fetch('get_tasks.php').then(response => response.json()).then(data => { ... });
}
