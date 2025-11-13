<x-layoutAdmin title=" Admin - Mug & Plate Store">
   <!-- Summary Cards -->
   <div class="summary-cards">
    <div class="card">
     <h3>Total Produk</h3>
     <p class="number">150</p>
    </div>
    <div class="card">
     <h3>Total Pesanan</h3>
     <p class="number">45</p>
    </div>
    <div class="card">
     <h3>Total Pelanggan</h3>
     <p class="number">200</p>
    </div>
    <div class="card">
     <h3>Total Penjualan</h3>
     <p class="number">Rp.500.000.000</p>
    </div>
   </div>

   <!-- Chart Placeholder -->
   <div class="chart-section">
    <h3>Grafik Penjualan Bulanan</h3>
    <div class="chart-placeholder">
     <p>Placeholder untuk grafik</p>
     <canvas id="salesChart" width="400" height="200"></canvas>
    </div>
   </div>

   <!-- Recent Orders Table -->
   <div class="table-section">
    <h3>Pesanan Terbaru</h3>
    <table class="orders-table">
     <thead>
      <tr>
       <th>Customer Name</th>
       <th>Date</th>
       <th>Total Price</th>
       <th>Status</th>

      </tr>
     </thead>
     <tbody>
      <tr>
       <td>John Doe</td>
       <td>2023-10-01</td>
       <td>Rp.9.000</td>
       <td>Shipped</td>
      </tr>
      <tr>
       <td>Jane Smith</td>
       <td>2023-10-02</td>
       <td>Rp.50.000</td>
       <td>Shipped</td>
      </tr>
      <tr>
       <td>Bob Johnson</td>
       <td>2023-10-03</td>
       <td>Rp.89.000</td>
       <td>Pending</td>
      </tr>
      <tr>
       <td>Alice Brown</td>
       <td>2023-10-04</td>
       <td>Rp.89.000</td>
       <td>Processing</td>
      </tr>
     </tbody>
    </table>
   </div>
  </main>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script>
  const ctx = document.getElementById('salesChart').getContext('2d');
  const salesChart = new Chart(ctx, {
   type: 'line',
   data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
     label: 'Penjualan (Rp.)',
     data: [1200, 1900, 3000, 5000, 2000, 3000],
     borderColor: '#4CAF50',
     backgroundColor: 'rgba(76, 175, 80, 0.2)',
     tension: 0.1
    }]
   },
   options: {
    responsive: true,
    scales: {
     y: { beginAtZero: true }
    }
   }
  });

  document.addEventListener('DOMContentLoaded', function () {
   const cards = document.querySelectorAll('.card');
   cards.forEach((card, index) => {
    setTimeout(() => {
     card.style.opacity = '1';
     card.style.transform = 'translateY(0)';
    }, index * 200);
   });
  });
 </script>
</x-layoutAdmin>
