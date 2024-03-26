
    <ul id="tree-data" style="display: none">
      <li id="root">
        PRESIDENT
        <ul>
          <li>
            SECRETARY & CORRESPONDENT
            <ul>
              <li>
                FINANCE, PLANNING & DEVELOPMENT COMMITTEE CHAIRMAN-President
              </li>
              <li>PRINCIPAL
              <ul>
                <li>FINANCE COMMITTEE</li>
                <li>ACADEMIC COUNCIL</li>
                <li>DIRECTOR ACADEMICS AND R&D
                <ul type="vertical">
                  <li>BOARDS OF STUDIES</li>
                  <li>ACADEMIC COMMITTEE</li>
                  <li>COORDINATOR ADMISSION SECTION</li>
                  <li>COORDINATOR ACADEMICS SECTION</li>
                  <li>LIBRARIAN LIBRARY & LEARNING RESOURCE CENTRE</li>
                </ul>
              </li>
                <li>DEAN EXAMINATION & EVALUTION
                <ul type="vertical">
                  <li>CONTROLLER OF EXAMINATIONS</li>
                  <li>RESULTS COMMITTEE</li>
                  <li>CONVINER EXTERNAL EXAMINATIONS</li>
                  <li>CONVINER INTERNAL EAMINATIONS</li>
                  <li>ADDITIONAL CONTROLLERS OF EXAMINATION AND EVALUATION</li>
                </ul>
              </li>
                <li>DIRECTOR-FINANCE & ADMINISTRATION
                <ul type="vertical">
                  <li>HOSTELS</li>
                  <li>WARDEN BOYS HOSTEL</li>
                  <li>WARDEN GIRLS HOSTEL</li>
                </ul>
              </li>
                <li>DEAN STUDENT AFFAIRS
                <ul type="vertical">
                  <li>PHYSICAL DIRECTOR</li>
                  <li>COORDINATOR CC ACTIVITIES</li>
                  <li>CORDINATOR EC ACTIVITIES</li>
                  <li>PROGRAM OFFICIER NOS</li>
                  <li>DESCIPLINARY ANTI RAGGING COMMITTEE</li>
                  <li>COORDINATOR PARENTS & FACULTY</li>
                </ul>
              </li>
                <li>DEAN PLACEMENTS
                  <ul type="vertical">
                    <li>PLACEMENT AND RELATIONS CIFFICER</li>
                    <li>TRAINING OFFICER</li>
                    <li>PLACEMENT DRIVE COMMITTEE</li>
                  </ul>
                </li>
                <li>SKILL DEVELOPMENT CELL AND ENTERPRENEURSHIP CELL
                  <ul type="vertical">
                    <li>INNOVATION AND INCUBATION CENTRE</li>
                    <li>STATE GOVERNAMENT SDC</li>
                    <li>ENTREPRENEUR DEVELOPMENT</li>
                  </ul>
                </li>
                <li>INTERNAL QUALITY ASSURANCE CELL</li>
              </li>
              </ul>
              <li>RVR & JC GOVERNING BODY CHAIRMAN-PRESIDENT</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>

    <div class="main">
      <div id="tree-view"></div>
    </div>
    <script>
      $("#tree-data").jOrgChart({
        chartElement: $("#tree-view"),
      });
    </script>
