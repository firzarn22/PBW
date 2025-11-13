<x-layoutAdmin title="Managemen for User">
            <div class="page-header">
                <h2>User Management</h2>
            </div>

            <!-- ===== TABEL USER BIASA ===== -->
            <div class="card">
                <h3 class="table-title">Daftar Pengguna (User Biasa)</h3>
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Join Date</th>
                            <th>Order Count</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John B</td>
                            <td>JohnB@mail.com</td>
                            <td>2025-09-02</td>
                            <td>5</td>
                            <td>

                                <button class="delete-btn"
                                    onclick="deleteRow(this, 'Remove akun John B?')">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Kiara</td>
                            <td>kiara@gmail.com</td>
                            <td>2025-09-05</td>
                            <td>3</td>
                            <td>

                                <button class="delete-btn" onclick="deleteRow(this, 'Remove akun Kiara?')">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td>John J</td>
                            <td>JohnJ@example.com</td>
                            <td>2025-09-10</td>
                            <td>2</td>
                            <td>

                                <button class="delete-btn"
                                    onclick="deleteRow(this, 'Remove akun John J?')">Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ===== TABEL ADMIN ===== -->
            <div class="card admin-card">
                <h3 class="table-title admin-title">Daftar Akun Admin</h3>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Admin Name</th>
                            <th>Email</th>
                            <th>Admin Code</th>
                            <th>Login Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Admin A</td>
                            <td>admin@bookstore.com</td>
                            <td>admin1</td>
                            <td><span class="status active">Active</span></td>
                            <td>

                                <button class="delete-btn" onclick="deleteRow(this, 'Remove Admin A?')">Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script>
        function confirmAction(message) {
            if (confirm(message)) {
                alert("Aksi berhasil dilakukan!");
            } else {
                alert("Aksi dibatalkan.");
            }
        }

        // Fungsi baru agar tombol Remove benar-benar mengRemove baris
        function deleteRow(button, message) {
            if (confirm(message)) {
                const row = button.closest('tr');
                row.remove();
                alert("Data berhasil diRemove!");
            } else {
                alert("Aksi dibatalkan.");
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const card = document.querySelector('.card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s, transform 0.5s';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 200);
        });
    </script>
</x-layoutAdmin>
