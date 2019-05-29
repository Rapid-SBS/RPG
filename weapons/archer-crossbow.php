<!-- Crossbow-->
  <div class="card wide-275 mar-20 text-white bg-green">
  <div class="accordion" id="accordion-crossbow">
      <div class="card-header text-center">
        <h4>Crossbow</h4>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <h6> Arrow</h6>
       </button>
      </div>
      <div id="collapseThree" class="collapse hidden" aria-labelledby="headingThree" data-parent="#accordion-crossbow">
        <div class="card-body light-transparency pad-10 text-center">
          <p class="card-text text-center">Fires an arrow. <br>DMG = Weapon ATT + Player ATT. </p>
        </div>
        <ul class="list-group text-center">
          <li class="list-group-item align-items-center light-transparency bg-green" style="padding: .35rem 1.25rem;">
            <span class="badge badge-light text-orange">3</span>
            Weapon ATT
          </li>
        </ul>
      </div>
      <div class="card-header pad-5 text-center">
        <button class="btn btn-link text-white text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <h6>Metal Arrow <span class="badge badge-light text-teal">3</span></h6>
        </button>
      </div>
      <div id="collapseFour" class="collapse hidden" aria-labelledby="headingFour" data-parent="#accordion-crossbow">
        <div class="card-body light-transparency pad-10 text-center">
          <p class="card-text text-center">Pierces enemy defenses.<br>DMG = Weapon ATT + Player ATT. <br>Costs 3 Mana.</p>
        </div>
          <ul class="list-group text-center">
            <li class="list-group-item align-items-center light-transparency bg-green" style="padding: .35rem 1.25rem;">
              <span class="badge badge-light text-orange">3</span>
              Weapon ATT
            </li>
          </ul>
          <ul class="list-group text-center">
            <li class="list-group-item align-items-center bg-green" style="padding: .35rem 1.25rem;">
              <span class="badge badge-light text-green">-4</span>
              Enemy DEF
            </li>
          </ul>
      </div>
  </div><!-- /.card -->    
  </div><!-- /.accordion -->