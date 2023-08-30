<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php require 'nav.php' ?>

    <body>
        <div class="container border">
            <div style="margin-top: 70px;">

            <h1 class="text-center">Tips Tab</h1>

            <ul class="nav nav-tabs alert-secondary">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab1">Accidents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2">Crime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab3">Domestic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab4">Fire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab5">First Aid</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab1"><br><br>
                 

                    <div class="card">
                        <!-- <div class="card-header">
    <h1>Emergency Handling - Accidents</h1>
    </div> -->
                        <div class="card-body">
                        <h3>Accident Handling</h3>
                            <div class="card my-3 p-3 shadow alert-danger">
                                <h4> Response Guidelines</h4>
                                <ul>
                                    <li>Ensure your safety and the safety of others involved.</li>
                                    <li>Call emergency services immediately (e.g., 911).</li>
                                    <li>Provide accurate location details.</li>
                                    <li>Assess the situation and check for injuries.</li>
                                    <li>Administer first aid if you are trained and it's safe to do so.</li>
                                    <li>Keep the injured person calm and reassure them help is on the way.</li>
                                    <li>Do not move seriously injured individuals unless necessary to avoid further harm.</li>
                                    <li>Keep bystanders away from the accident scene.</li>
                                    <li>Cooperate with emergency personnel upon their arrival.</li>
                                </ul>
                            </div>

                            <div class="card my-3 p-3 shadow alert-secondary">
                                <h4>Important Contact Information</h4>
                                <p>Keep these emergency contact numbers handy:</p>
                                <ul>
                                    <li>Emergency Services: 911</li>
                                    <li>Local Police Department</li>
                                    <li>Local Fire Department</li>
                                    <li>Local Hospital</li>
                                    <li>Family Doctor</li>
                                    <li>Insurance Provider</li>
                                    <li>Emergency Contacts (Family, Friends)</li>
                                </ul>
                            </div>

                            <div class="card my-3 p-3 shadow alert-primary">
                                <h4>Preventing Accidents</h4>
                                <p>Follow these tips to minimize the risk of accidents:</p>
                                <ul>
                                    <li>Observe traffic rules and regulations.</li>
                                    <li>Never drive under the influence of alcohol or drugs.</li>
                                    <li>Avoid distracted driving (e.g., texting, phone calls).</li>
                                    <li>Use appropriate safety gear (e.g., seatbelts, helmets).</li>
                                    <li>Maintain a safe speed and proper distance from other vehicles.</li>
                                    <li>Be cautious of pedestrians and cyclists.</li>
                                    <li>Regularly maintain your vehicle for optimal performance.</li>
                                    <li>Securely store hazardous materials and chemicals.</li>
                                    <li>Keep your home and workplace free from potential hazards.</li>
                                    <li>Follow safety protocols and guidelines in your industry or workplace.</li>
                                </ul>
                            </div>

                            <div class="card my-3 p-3 shadow alert-success">
                                <h4>Additional Resources</h4>
                                <p>For more information on emergency preparedness and accident prevention, refer to the following resources:</p>
                                <ul>
                                    <li>Local government websites</li>
                                    <li>National safety organizations</li>
                                    <li>Occupational safety guidelines</li>
                                    <li>First aid and CPR training programs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="tab2"><br><br>
                  

                    <div class="card">
                        <!-- <div class="card-header">
                            <h1>Crime Emergency Response</h1>
                        </div> -->
                        <div class="card-body">
                        <h3>Crime Response</h3>
                            <div class="card my-3 p-3 shadow alert-success">
                                <h4>Emergency Contacts</h4>
                                <p>In case of a crime emergency, please contact the following:</p>
                                <ul>
                                    <li>Police: 911</li>
                                    <li>Fire Department: 911</li>
                                    <li>Ambulance: 911</li>
                                    <li>Local Emergency Services: [Local contact details]</li>
                                </ul>
                            </div>

                            <div class="card my-3 p-3 shadow alert-info">
                                <h4>Steps to Handle a Crime Emergency</h4>
                                <ol>
                                    <li>Remain calm and try to assess the situation.</li>
                                    <li>Ensure your safety and the safety of others involved.</li>
                                    <li>Call the emergency services (911) and provide clear details of the crime and your location.</li>
                                    <li>If possible, gather important information such as descriptions of the individuals involved, license plates, or any other relevant details.</li>
                                    <li>Follow the instructions provided by emergency responders.</li>
                                    <li>Cooperate fully with the authorities when they arrive at the scene.</li>
                                    <li>Document any injuries, damages, or stolen items as evidence for insurance claims and legal proceedings.</li>
                                    <li>Contact your local law enforcement agency to report the incident and provide them with any additional information.</li>
                                </ol>
                            </div>

                            <div class="card my-3 p-3 shadow alert-danger">
                                <h4>Additional Tips</h4>
                                <ul>
                                    <li>Ensure your home and belongings are adequately secured with locks, alarms, and surveillance systems.</li>
                                    <li>Stay aware of your surroundings and report any suspicious activities to the authorities.</li>
                                    <li>Participate in community crime prevention programs and initiatives.</li>
                                    <li>Educate yourself and your family on personal safety measures.</li>
                                    <li>Keep important emergency contact numbers easily accessible.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3"><br><br>
                   
                    <div class="card">
                        <!-- <div class="card-header">
                            <h1>Handling Domestic Emergencies</h1>
                        </div> -->
                        <div class="card-body">
                        <h3> Domestic Emergencies</h3>
                            <div class="card">
                                <div class="card-body m-3 p-3 shadow alert-primary">
                                    <h4>Emergency Contact Numbers:</h4>
                                    <ul>
                                        <li>Police: <a href="tel:911">911</a></li>
                                        <li>Ambulance: <a href="tel:911">911</a></li>
                                        <li>Fire Department: <a href="tel:911">911</a></li>
                                        <li>Poison Control: <a href="tel:800-222-1222">800-222-1222</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card my-3">
                                <div class="card-body m-3 p-3 shadow alert-info">
                                    <h4> Domestic Emergencies(General)</h4>
                                    <ul>
                                        <li><strong>Stay Calm:</strong> Try to remain calm and composed during emergencies to think clearly and make better decisions.</li>
                                        <li><strong>Ensure Safety:</strong> Focus on the safety of yourself and others involved. If necessary, evacuate to a safe location.</li>
                                        <li><strong>Call for Help:</strong> Dial the appropriate emergency contact number (e.g., 911) to report the situation and provide necessary information.</li>
                                        <li><strong>Provide Details:</strong> Clearly describe the emergency situation to the dispatcher, including your location and any relevant details.</li>
                                        <li><strong>Follow Instructions:</strong> If the emergency services provide instructions, follow them carefully and cooperate with responders.</li>
                                        <li><strong>Administer First Aid:</strong> If you have knowledge of first aid, provide immediate assistance to injured individuals until professional help arrives.</li>
                                        <li><strong>Keep Emergency Kit:</strong> Prepare an emergency kit with essentials like water, non-perishable food, flashlights, batteries, and a first aid kit.</li>
                                        <li><strong>Stay Informed:</strong> Stay updated on emergency preparedness and response procedures to be better prepared for future incidents.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card my-3">
                                <div class="card-body m-3 p-3 shadow alert-dark">
                                    <h4>Specific Emergency Handling:</h4>
                                    <h3>Fire:</h3>
                                    <ul>
                                        <li>Evacuate immediately and call the fire department.</li>
                                        <li>Close doors behind you to slow down the spread of fire.</li>
                                        <li>Stay low to avoid smoke inhalation.</li>
                                        <li>Do not use elevators; use stairs instead.</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body m-3 p-3 shadow alert-success">
                                    <h3>Flood:</h3>
                                    <ul>
                                        <li>If safe, turn off electricity and gas to prevent accidents.</li>
                                        <li>Move to higher ground and avoid flooded areas.</li>
                                        <li>Do not walk or drive through floodwaters.</li>
                                        <li>Listen to local authorities and follow evacuation orders if necessary.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card my-3">
                                <div class="card-body m-3 p-3 shadow alert-danger">
                                    <h3>Medical Emergency:</h3>
                                    <ul>
                                        <li>Call for an ambulance or seek medical assistance immediately.</li>
                                        <li>Administer first aid if trained and necessary.</li>
                                        <li>Stay with the person in need and provide comfort and reassurance.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="tab-pane fade" id="tab4"><br> <br>


                    <div class="card">
                        <h3 class="text-center">Fire Emergency Tips</h3>
                        <div class="card-body">

                            <div class="tips-section card shadow alert-success">
                                <div class="p-3">
                                    <h4>1. Stay Calm</h4>
                                    <p>During a fire emergency, it's crucial to remain calm and avoid panic. Panic can hinder clear thinking and decision-making.</p>
                                </div>

                                <div class="p-3">
                                    <h4>2. Alert Others</h4>
                                    <p>Immediately notify others about the fire. Shout "Fire!" or use fire alarms if available. Ensure everyone is aware and can evacuate.</p>
                                </div>

                                <div class="p-3">
                                    <h4>3. Evacuate Safely</h4>
                                    <p>Leave the building using the nearest and safest exit routes. Crawl if there's smoke and cover your nose and mouth with a cloth.</p>
                                </div>

                                <div class="p-3">
                                    <h4>4. Don't Use Elevators</h4>
                                    <p>Avoid using elevators during a fire emergency. Elevators can malfunction or trap you in a dangerous situation.</p>
                                </div>

                                <div class="p-3">
                                    <h4>5. Contact Emergency Services</h4>
                                    <p>Call the emergency services (e.g., 911) immediately after evacuating. Provide accurate information about the fire and your location.</p>
                                </div>

                                <div class="p-3">
                                    <h4>6. Don't Re-enter the Building</h4>
                                    <p>Once outside, do not re-enter the building until it is declared safe by the authorities. Follow their instructions carefully.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="tab5">
                    <div class="card shadow alert-success p-3 my-4">
                    <h3 class="text-center m-4">First Aid Tips</h3>
                    <!-- <h1>First Aid Tips</h1> -->


                    <div class="first-aid-step">
                        <h4 class="">Step 1: Assess the Situation</h4>
                        <p class="step-description">
                            Before providing first aid, it's important to assess the situation and ensure your safety as well as the safety of the injured person.
                            Evaluate the environment for any potential hazards and take necessary precautions.
                        </p>
                    </div>

                    <div class="first-aid-step">
                        <h4 class="">Step 2: Call for Help</h4>
                        <p class="step-description">
                            If the injury or medical condition is severe or life-threatening, call emergency services immediately or ask someone nearby to do so.
                            Provide them with accurate information about the situation and follow their instructions while waiting for professional help.
                        </p>
                    </div>

                    <div class="first-aid-step">
                        <h4 class="">Step 3: Provide Basic First Aid</h4>
                        <p class="step-description">
                            Depending on the type of injury or condition, you can administer basic first aid techniques such as:
                        </p>
                        <ul>
                            <li>Applying pressure to control bleeding</li>
                            <li>Performing CPR (Cardiopulmonary Resuscitation) for someone who is not breathing</li>
                            <li>Stabilizing fractures or dislocations</li>
                            <li>Providing rescue breaths for someone who is not breathing but has a pulse</li>
                            <li>Elevating injured limbs to reduce swelling</li>
                            <li>Using an automated external defibrillator (AED) if available and trained to do so</li>
                        </ul>
                    </div>

                    <div class="first-aid-step">
                        <h4 class="">Step 4: Comfort and Reassure</h4>
                        <p class="step-description">
                            While waiting for professional help, it's important to provide comfort and reassurance to the injured person.
                            Stay with them, speak calmly, and let them know that help is on the way.
                        </p>
                    </div>

                    <div class="first-aid-step">
                        <h4 class="">Step 5: Follow Up</h4>
                        <p class="step-description">
                            After the immediate first aid is provided, it's essential to follow up with appropriate medical care.
                            Encourage the injured person to seek further evaluation and treatment from healthcare professionals for proper recovery.
                        </p>
                    </div>
                    </div>

                </div>
            </div>
       
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</body>

</html>