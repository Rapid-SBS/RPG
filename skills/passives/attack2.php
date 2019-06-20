  <div class="row justify-content-center">

    <div id="lvl-10-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- ATT Boost II -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseATTboost2" role="button" aria-expanded="false" aria-controls="collapseATTboost2">
        <input type="radio" name="passive" value="ATT II" v-model="lvl10Selection">
        <h6>ATT Boost II</h6>
      </label>

      <!-- INT Boost II -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseINTboost2" role="button" aria-expanded="false" aria-controls="collapseINTboost2">
        <input type="radio" name="passive" value="INT II" v-model="lvl10Selection">
        <h6>INT Boost II</h6>
      </label>

      <br>
      <p class="jhide" id="lvl-10-selection">{{lvl10Selection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="passive-attack2" class="row mx-auto pad-10">

    <!-- ATT Boost II -->
    <div class="collapse mx-auto" id="collapseATTboost2" data-parent="#passive-attack2">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase ATT by an additional 1.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">+1</span>
            ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- INT Boost II -->
    <div class="collapse mx-auto" id="collapseINTboost2" data-parent="#passive-attack2">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase INT by an additional 1.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-purple">+1</span>
            INT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->