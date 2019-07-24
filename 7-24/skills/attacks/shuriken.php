  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Hidden Strike -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseHiddenstrike" role="button" aria-expanded="false" aria-controls="collapseHiddenstrike">
        <input type="radio" name="ability" value="Hidden Strike" v-model="attackSelection">
        <h6>Hidden Strike</h6>
      </label>

      <!-- Duplicity -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseDuplicity" role="button" aria-expanded="false" aria-controls="collapseDuplicity">
        <input type="radio" name="ability" value="Duplicity" v-model="attackSelection">
        <h6>Duplicity</h6>
      </label>
      <br>
      <p class="jhide" id="attack-selection">{{attackSelection}}</p>
    </div>
  </div><!-- /.row -->


  </div><!-- /.row -->

  <div id="attack-shuriken" class="row mx-auto pad-10 max-wide-380">

    <!-- Hidden Strike -->
    <div class="collapse mx-auto" id="collapseHiddenstrike" data-parent="#attack-shuriken">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Hurl shuriken while concealed.<br>Guaranteed Crit if used while Hidden.<br>DMG = 2 x (Player ATT).<br>Costs 5 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Duplicity -->
    <div class="collapse mx-auto" id="collapseDuplicity" data-parent="#attack-shuriken">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Use your shadow clone as a distraction while you attack enemies from behind.<br>Partially ignores enemy DEF.<br>DMG = Weapon ATT + Player ATT.<br>Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">7</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">-3</span>
            Enemy DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->