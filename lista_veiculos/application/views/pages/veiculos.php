<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Veiculos</h1>
    <div class="btn-group mr-2">
      <a href="<?= base_url() ?>veiculos/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Veiculo</a>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Placa</th>
          <th>Cor</th>
          <th>Modelo</th>
          <th>Chassi</th>
          <th>Ano</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($veiculos as $veiculo) : ?>
          <tr>
            <td><?= $veiculo['id'] ?></td>
            <td><?= $veiculo['placa'] ?></td>
            <td><?= $veiculo['cor'] ?></td>
            <td><?= $veiculo['modelo'] ?></td>
            <td><?= $veiculo['chassi'] ?></td>
            <td><?= $veiculo['ano'] ?></td>
            <td>
              <a href="<?= base_url() ?>veiculos/edit/<?= $veiculo["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
              <a href="javascript:goDelete(<?= $veiculo['id'] ?>)" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>

<!-- COLOCAR ESSA PARTE EM OUTRO ARQUIVO -->
<script>
  function goDelete(id) {
    const myUrl = 'veiculos/delete/' + id
    if (confirm("Deseja realmente apagar este registro?")) {
      window.location.href = myUrl
    } else {
      alert("Registro não alterado")
      return false
    }
  }
</script>