  <div class="row justify-content-center">

    <div id="lvl-7-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- DEF Boost II -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseDEFboost2" role="button" aria-expanded="false" aria-controls="collapseDEFboost2">
        <input type="radio" name="passive" value="DEF II" v-model="lvl7Selection">
        <h6>DEF Boost II</h6>
      </label>

      <!-- RES Boost II -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseRESboost2" role="button" aria-expanded="false" aria-controls="collapseRESboost2">
        <input type="radio" name="passive" value="RES II" v-model="lvl7Selection">
        <h6>RES Boost II</h6>
      </label>

      <br>
      <p class="jhide" id="lvl-7-selection">{{lvl7Selection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="passive-defense2" class="row mx-auto pad-10">

    <!-- DEF Boost II -->
    <div class="collapse mx-auto" id="collapseDEFboost2" data-parent="#passive-defense2">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase DEF by an additional 1.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+1</span>
            DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- RES Boost II -->
    <div class="collapse mx-auto" id="collapseRESboost2" data-parent="#passive-defense2">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase RES by an additional 1.<br>
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