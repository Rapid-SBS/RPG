  <div class="row justify-content-center">

    <div id="lvl-1-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Vitality -->
      <label class="btn text-white pad-10 mar-5 btn-paleblue" data-toggle="collapse" href="#collapseVitality" role="button" aria-expanded="false" aria-controls="collapseVitality">
        <input type="radio" name="passive" value="Vitality" v-model="lvl1Selection">
        <h6>Vitality</h6>
      </label>

      <br>
      <h4 id="lvl-1-selection">{{lvl1Selection}}</h4>
    </div>
  </div><!-- /.row -->

  <div id="passive-vitality" class="row mx-auto pad-10">

    <!-- Vitality -->
    <div class="collapse mx-auto" id="collapseVitality" data-parent="#passive-vitality">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Passive Skill</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Permanently increase HP by 2.<br>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-red">+2</span>
            HP
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->