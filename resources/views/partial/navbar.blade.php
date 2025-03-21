
{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/Index">Halaman Utama</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tambahData">Tambah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/editData">Edit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/destroyData">Hapus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/tampilData">Lihat Data</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
{{-- akhir navbar --}}