<div class="well well bs-component">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
              @endforeach
              @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Submit A New Question</legend>
                    <div class="form-group">
                        <label for="level" class="col-lg-2 control-label">Subject</label>
                        <div class="col-lg-5">
                            <select class="form-control selcls" id="level" name="subject">
                              <option>PHYSICS</option>
                              <option>CHEMISTRY</option>
                              <option>MATHS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="level" class="col-lg-2 control-label">Level</label>
                        <div class="col-lg-5">
                            <select class="form-control selcls" id="level" name="level">
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="topic" class="col-lg-2 control-label">Chapter</label>
                        <div class="col-lg-8">
                            <select class="form-control selcls" id="topic" name="topic">
                              <option value="modern_physics">Modern Physics</option>
                              <option value="electrostatics">Electrostatics</option>
                              <option value="charge">Charge</option>
                              <option value="coulumbs_law">Coulumbs Law</option>
                              <option value="principle_of_superposition">Principle Of Superposition</option>
                              <option value="continous_charge_distribution">Continous Charge Distribution</option>
                              <option value="electric_field">Electric Field</option>
                              <option value="electric_dipole">Electric Dipole</option>
                              <option value="electric_flux">Electric Flux</option>
                              <option value="gauss_law">Gauss Law</option>
                              <option value="electric_potential">Electric Potential</option>
                              <option value="behaviour_of_conductors_in_electric_field">Behaviour Of Conductors In Electric Field</option>
                              <option value="dielectric">Dielectric</option>
                              <option value="capacitor_and_capicitance">Capacitor And Capacitance</option>
                              <option value="vande_graff_generator">Vande Graff Generator</option>
                              <option value="current">Current</option>
                              <option value="ohms_law">Ohm's Law</option>
                              <option value="set_relations_and_functions">Set Relation And Function</option>
                              <option value="complex_numbers">Complex Numbers</option>
                              <option value="equation_and_inequalities">Equation And Inequalities</option>
                              <option value="sequences_and_series">Sequence And Series</option>
                              <option value="permutation_and_combinations">Permutation And Combunations</option>
                              <option value="binomial_theorm_and_mathematical_induction">Binomial Theorm And Mathematical induction</option>
                              <option value="matrices_and_determinants">Matrices And Determinants</option>
                              <option value="trignometric_identities_equations">Trignometric Identities Equations</option>
                              <option value="inverse_trignometric_functions">Inverse Trignometric Functions</option>
                              <option value="properties_of_triangle">Properties Of Triangle</option>
                              <option value="heights_and_distances">Height And Distances</option>
                              <option value="rectangular_cartesian_coordinates">Rectangular Cartesian Coordinates</option>
                              <option value="straight_line_and_pair_of_straight_lines">Straight Line And Pair Of Straight Lines</option>
                              <option value="circle_and_system_of_circles">Circle And System Of Circles</option>
                              <option value="conic_section">Conic Section</option>
                              <option value="limits_continuity_and_differentiability">Limits,Continuity And Differentiability</option>
                              <option value="differentiation">Differentiation</option>
                              <option value="application_of_derivatives">Application Of Derviatives</option>
                              <option value="indefinite_integrals">Indefinite Integrals</option>
                              <option value="definite_integrals">Definite Integrals</option>
                              <option value="differential_equations">Differential Equations</option>
                              <option value="vector_algebra">Vector Algebra</option>
                              <option value=""3d_gemotry>3D Gemotry</option>
                              <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="question" class="col-lg-2 control-label">Question</label>
                        <div class="col-lg-10">
                            <textarea class="form-control"  rows="3" id="question" name="questions"></textarea>
                            <span class="help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="imp" class="col-lg-2 control-label">Bookmark</label>
                      <div class="col-lg-10">
                        <label class="radio-inline"><input type="radio" value="yes" name="imp">Yes</label>
                        <label class="radio-inline"><input type="radio" value="no" name="imp">No</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="fileQ" class="col-lg-2 control-label">Question Image Url</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fileQ">
                    </div>
                    <div class="form-group">
                        <label for='optionA' class="col-lg-2 control-label">Option A:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="optionA" placeholder="Option A" name="a">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fileA" class="col-lg-2 control-label">A Image Url</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fileA">
                    </div>
                    <div class="form-group">
                        <label for='optionB' class="col-lg-2 control-label">Option B:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="optionB" placeholder="Option B" name="b">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fileB" class="col-lg-2 control-label">B Image Url</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fileB">
                    </div>
                    <div class="form-group">
                        <label for='optionC' class="col-lg-2 control-label">Option C:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="optionC" placeholder="Option C" name="c">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fileC" class="col-lg-2 control-label">C Image Url</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fileC">
                    </div>
                    <div class="form-group">
                        <label for='optionD' class="col-lg-2 control-label">Option D:</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="optionD" placeholder="Option D" name="d">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fileD" class="col-lg-2 control-label">D Image Url</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fileD">
                    </div>
                    <div class="form-group">
                        <label for="answer" class="col-lg-2 control-label">Answer</label>
                        <div class="col-lg-5">
                            <select class="form-control selcls" id="answer" name="answer">
                              <option>A</option>
                              <option>B</option>
                              <option>C</option>
                              <option>D</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
