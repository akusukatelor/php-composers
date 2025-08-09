<?php


class Orang {
    protected $nama;
    protected $umur;

    public function __construct($name, $umur)
    {
        $this->nama = $name;
        $this->umur = $umur;
    }
      
    public function getInfo() {
        return "Nama: {$this->nama}, Umur: {$this->umur}";
    }

}

class Alfin extends Orang {
    public function __construct($name, $umur) 
    {
        parent::__construct($name,$umur);
        
    }
}


$mhs = new Alfin("alfin",20);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light nav">
  <div class="container-fluid mx-5">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto me-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container d-flex gap-3">
  <div class="card" style="width: 18rem;">
    <img src="https://fardamultikreasi.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-22-at-00.12.18.png" class="card-img-top" alt="...">
    
  </div>

  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <div class="flex d-flex gap-3">
      <a href="#" class="btn btn-primary">Hubungi kammi</a>
      <a href="#" class="btn btn-primary button">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
