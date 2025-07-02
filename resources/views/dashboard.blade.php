<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <button onclick="logout()">Logout</button>
    
    <h2>Data Table</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody id="dataTable"></tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const token = localStorage.getItem('token');

        if (!token) {
            window.location.href = '/'; 
        }

        // Ambil data user dari API
        axios.get('http://127.0.0.1:8000/api/users', {
            headers: {
                'Authorization': 'Bearer ' + token
            }
        })
        .then(response => {
            const data = response.data;
            const tbody = document.getElementById('dataTable');
            data.forEach(item => {
                tbody.innerHTML += `
                    <tr>
                        <td>${item.id}</td>
                        <td>${item.name}</td>
                        <td>${item.email}</td>
                        <td>${item.role}</td>
                    </tr>
                `;
            });
        })
        .catch(error => {
            console.error(error);
            if (error.response && error.response.status === 401) {
                logout(); 
            }
        });

        function logout() {
            localStorage.removeItem('token');
            localStorage.removeItem('role'); 
            window.location.href = '/'; 
        }
    </script>
</body>
</html>
