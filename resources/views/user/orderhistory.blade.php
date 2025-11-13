<x-layoutUser>
  <link rel="stylesheet" href="{{ asset('css/user/orderhistory.css') }}">

  <div class="container">
    <h1>Order History</h1>

    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Product Name</th>
          <th>Payment</th>
          <th>Status</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="id">#170</td>
          <td>Blossom Mug</td>
          <td class="paid">Paid</td>
          <td class="pending">Pending</td>
          <td>IDR 300.000</td>
        </tr>
        <tr>
          <td class="id">#208</td>
          <td>Amaryllis Mug</td>
          <td class="cod">COD</td>
          <td class="cancelled">Cancelled</td>
          <td>IDR 200.000</td>
        </tr>
        <tr>
          <td class="id">#160</td>
          <td>Aster Mug</td>
          <td class="cod">COD</td>
          <td class="cancelled">Cancelled</td>
          <td>IDR 100.000</td>
        </tr>
        <tr>
          <td class="id">#230</td>
          <td>Cherry Blossom Mug</td>
          <td class="paid">Paid</td>
          <td class="delivered">Delivered</td>
          <td>IDR 250.000</td>
        </tr>
      </tbody>
    </table>
  </div>
</x-layoutUser>
