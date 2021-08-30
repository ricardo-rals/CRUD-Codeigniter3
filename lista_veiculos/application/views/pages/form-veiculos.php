<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"></h1>
  </div>

  <div class="col-md-12">
    <?php if (isset($veiculo)) : ?>
      <form action="<?= base_url() ?>veiculos/update/<?= $veiculo['id'] ?>" method="post">
      <?php else : ?>
        <form action="<?= base_url() ?>veiculos/store" method="post">
        <?php endif; ?>

        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Placa</label>
            <input type="text" class="form-control" name="placa" id="placa" placeholder="Placa" required value="<?= isset($veiculo) ? $veiculo['placa'] : '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="description">Cor</label>
            <input type="text" class="form-control" name="cor" id="cor" placeholder="Cor" required value="<?= isset($veiculo) ? $veiculo['cor'] : '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="price">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required value="<?= isset($veiculo) ? $veiculo['modelo'] : '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="developer">Chassi</label>
            <input type="text" class="form-control" name="chassi" id="chassi" placeholder="CHassi" required value="<?= isset($veiculo) ? $veiculo['chassi'] : '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="release_date">Ano</label>
            <input type="text" class="form-control" name="ano" id="ano" placeholder="Ano" required value="<?= isset($veiculo) ? $veiculo['ano'] : '' ?>">
          </div>
        </div>

        <div class="col-md-6">
          <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
          <a href="<?= base_url() ?>veiculos" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
        </div>
  </div>
  </form>
  </div>

</main>
</div>
</div>