  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Meditate -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseMeditate" role="button" aria-expanded="false" aria-controls="collapseMeditate"><input type="radio" name="picked" value="Meditate" v-model="supportSelection">
        <h6>Meditate</h6>
      </label>

      <!-- Staff Spin -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseStaffspin" role="button" aria-expanded="false" aria-controls="collapseStaffspin">
        <input type="radio" name="picked" value="Staff Spin" v-model="supportSelection">
        <h6>Staff Spin</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-bostaff" class="row mx-auto pad-10 max-wide-380">

    <!-- Meditate -->
    <div class="collapse mx-auto" id="collapseMeditate" data-parent="#support-bostaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Take a moment to center yourself, revitalizing your mind and body.<br>HEAL = Player INT.<br> Costs 2 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">+4</span>
            Mana
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Staff Spin -->
    <div class="collapse mx-auto" id="collapseStaffspin" data-parent="#support-bostaff">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Rapidly twirl your staff around you, boosting DEF for 1 turn.<br>Costs 3 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+3</span>
            Bonus DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->