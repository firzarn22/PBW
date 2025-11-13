<x-layoutAdmin title="Manajemen Produk">
    <div class="page-header">
        <h2>Product Management</h2>
        <button class="add-product-btn" id="openModalBtn">+ Add New Product</button>
    </div>

    <div class="card">
        <table class="product-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Best Seller</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                <tr>
                    <td>MP001</td>
                    <td><img src="/images/coba1.jpg" alt="Mug Example" class="product-thumb"></td>
                    <td>Elegant Mug</td>
                    <td>Mug</td>
                    <td>Rp45.000</td>
                    <td>25</td>
                    <td><span class="best-seller-label">✅</span></td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>MP002</td>
                    <td><img src="/images/coba2.jpg" alt="Plate Example" class="product-thumb"></td>
                    <td>Minimalist Plate</td>
                    <td>Plate</td>
                    <td>Rp60.000</td>
                    <td>12</td>
                    <td><span class="best-seller-label">❌</span></td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal Add/Edit Product -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModalBtn">&times;</span>
            <h3 id="modalTitle">Add Product</h3>
            <form id="productForm">
                <label>Product ID</label>
                <input type="text" id="productId" placeholder="Example: MP003" required>

                <label>Product Name</label>
                <input type="text" id="productName" placeholder="Enter product name" required>

                <label>Product Category</label>
                <select id="productType" required>
                    <option value="">-- Select Category --</option>
                    <option value="Mug">Mug</option>
                    <option value="Plate">Plate</option>
                </select>

                <label>Description</label>
                <textarea id="productDesc" rows="3" placeholder="Short description"></textarea>

                <label>Price</label>
                <input type="number" id="productPrice" placeholder="Enter price" required>

                <label>Stock Quantity</label>
                <input type="number" id="productStock" placeholder="Enter stock quantity" required>

                <label>Upload Image</label>
                <input type="file" id="productImage" accept="image/*">

                <label>
                    <input type="checkbox" id="isBestSeller"> Mark as Best Seller
                </label>

                <div class="modal-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn" id="cancelBtn">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const modal = document.getElementById("productModal");
        const openModalBtn = document.getElementById("openModalBtn");
        const closeModalBtn = document.getElementById("closeModalBtn");
        const cancelBtn = document.getElementById("cancelBtn");
        const form = document.getElementById("productForm");
        const modalTitle = document.getElementById("modalTitle");
        const tbody = document.getElementById("productTableBody");

        let editRow = null;

        openModalBtn.onclick = () => {
            modalTitle.textContent = "Add Product";
            form.reset();
            editRow = null;
            modal.style.display = "flex";
        };

        closeModalBtn.onclick = cancelBtn.onclick = () => modal.style.display = "none";

        window.onclick = (e) => {
            if (e.target === modal) modal.style.display = "none";
        };

        // Save Product (Add/Edit)
        form.onsubmit = function (e) {
            e.preventDefault();
            const id = document.getElementById("productId").value;
            const name = document.getElementById("productName").value;
            const type = document.getElementById("productType").value;
            const price = document.getElementById("productPrice").value;
            const stock = document.getElementById("productStock").value;
            const isBestSeller = document.getElementById("isBestSeller").checked ? "✅" : "❌";

            if (editRow) {
                editRow.cells[0].innerText = id;
                editRow.cells[2].innerText = name;
                editRow.cells[3].innerText = type;
                editRow.cells[4].innerText = "Rp" + parseInt(price).toLocaleString("id-ID");
                editRow.cells[5].innerText = stock;
                editRow.cells[6].innerHTML = isBestSeller;
            } else {
                const newRow = tbody.insertRow();
                newRow.innerHTML = `
                    <td>${id}</td>
                    <td><img src="/adminside/image/default.jpg" class="product-thumb"></td>
                    <td>${name}</td>
                    <td>${type}</td>
                    <td>Rp${parseInt(price).toLocaleString("id-ID")}</td>
                    <td>${stock}</td>
                    <td>${isBestSeller}</td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                `;
            }
            modal.style.display = "none";
        };

        // Edit & Delete
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("edit-btn")) {
                const row = e.target.closest("tr");
                editRow = row;
                document.getElementById("productId").value = row.cells[0].innerText;
                document.getElementById("productName").value = row.cells[2].innerText;
                document.getElementById("productType").value = row.cells[3].innerText;
                document.getElementById("productPrice").value = row.cells[4].innerText.replace(/[Rp,.]/g, '');
                document.getElementById("productStock").value = row.cells[5].innerText;
                document.getElementById("isBestSeller").checked = row.cells[6].innerText === "✅";
                modalTitle.textContent = "Edit Product";
                modal.style.display = "flex";
            }

            if (e.target.classList.contains("delete-btn")) {
                const row = e.target.closest("tr");
                if (confirm("Are you sure you want to delete this product?")) {
                    row.remove();
                }
            }
        });

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
