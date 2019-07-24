  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Air Cannon -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseAircannon" role="button" aria-expanded="false" aria-controls="collapseAircannon">
        <input type="radio" name="ability" value="Air Cannon" v-model="ultimateSelection">
        <h6>Air Cannon</h6>
      </label>

      <!-- Hurricane Sphere -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseHurricanesphere" role="button" aria-expanded="false" aria-controls="collapseHurricanesphere">
        <input type="radio" name="ability" value="Hurricane Sphere" v-model="ultimateSelection">
        <h6>Hurricane Sphere</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-windfu" class="row mx-auto pad-10 max-wide-380">

    <!-- Air Cannon -->
    <div class="collapse mx-auto" id="collapseAircannon" data-parent="#ultimate-windfu">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Fire a blast of extreme air pressure so intense it can shatter boulders.<br>Double Critical Hit Rate.<br>DMG = 3 x (Player INT).<br>Costs 10 Mana.</p> 
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">2x</span>
            Crit Rate
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Hurricane Sphere -->
    <div class="collapse mx-auto" id="collapseHurricanesphere" data-parent="#ultimate-windfu">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Trap your enemies in a giant sphere and bombard them with hurricane-force winds.<br>DMG = 2 x (Player INT).<br> Costs 12 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->