  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Strafe -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseStrafe" role="button" aria-expanded="false" aria-controls="collapseStrafe"><input type="radio" name="picked" value="Strafe" v-model="supportSelection">
        <h6>Strafe</h6>
      </label>

      <!-- Spark Bomb -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseSparkbomb" role="button" aria-expanded="false" aria-controls="collapseSparkbomb">
        <input type="radio" name="picked" value="Spark Bomb" v-model="supportSelection">
        <h6>Spark Bomb</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-crossbow" class="row mx-auto pad-10 max-wide-380">

    <!-- Strafe -->
    <div class="collapse mx-auto" id="collapseStrafe" data-parent="#support-crossbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Evade the next enemy attack.<br> Costs 4 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Spark Bomb -->
    <div class="collapse mx-auto" id="collapseSparkbomb" data-parent="#support-crossbow">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Daze your opponent with a bright and noisy bomb.<br>Triples enemy Miss Rate for 1 turn.<br> Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">3x</span>
            Enemy Miss Rate
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->