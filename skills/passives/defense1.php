  <div class="row justify-content-center">

    <div id="lvl-3-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- DEF Boost I -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseDEFboost1" role="button" aria-expanded="false" aria-controls="collapseDEFboost1">
        <input type="radio" name="passive" value="DEF I" v-model="lvl3Selection">
        <h6>DEF Boost I</h6>
      </label>

      <!-- RES Boost I -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseRESboost1" role="button" aria-expanded="false" aria-controls="collapseRESboost1">
        <input type="radio" name="passive" value="RES I" v-model="lvl3Selection">
        <h6>RES Boost I</h6>
      </label>

      <br>
      <p class="jhide" id="lvl-3-selection">{{lvl3Selection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="passive-defense1" class="row mx-auto pad-10">

    <!-- DEF Boost I -->
    <div class="collapse mx-auto" id="collapseDEFboost1" data-parent="#passive-defense1">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase DEF by 1.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+1</span>
            DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- RES Boost I -->
    <div class="collapse mx-auto" id="collapseRESboost1" data-parent="#passive-defense1">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase RES by 1.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+1</span>
            RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->