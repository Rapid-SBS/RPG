  <div class="row justify-content-center">

    <!-- Lightning Bolt -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseLightningbolt" role="button" aria-expanded="false" aria-controls="collapseLightningbolt">
      <h6>Lightning Bolt <span class="badge badge-light text-teal">4</span></h6>
    </a>

    <!-- Arc Sphere -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseArcsphere" role="button" aria-expanded="false" aria-controls="collapseArcsphere">
      <h6>Arc Sphere <span class="badge badge-light text-teal">5</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="attack-lightning" class="row mx-auto pad-10">

    <!-- Lightning Bolt -->
    <div class="collapse mx-auto" id="collapseLightningbolt" data-parent="#attack-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a bolt of lightning at an enemy.<br>DMG = 2 x (Player INT).<br> Costs 4 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Arc Sphere -->
    <div class="collapse mx-auto" id="collapseArcsphere" data-parent="#attack-lightning">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Create a charged sphere that shocks enemies within.<br> DMG = Weapon ATT + Player INT.<br> Costs 5 Mana.</p>
        </div>
        <ul class="list-group text-center">
          <li class="list-group-item align-items-center light-transparency bg-blue" style="padding: .35rem 1.25rem;">
            <span class="badge badge-light text-orange">2</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->