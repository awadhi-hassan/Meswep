<x-app-layout>
    <x-slot name="header">
        <strong>About Us</strong>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex" style="justify-content: space-around">
                <div class="col-4 px-3 pt-2 border-b border-gray-200 shadow-sm sm:rounded-lg" style="background-color: white; text-align:center;">
                    <div class="d-flex justify-center align-items-center">
                        <img class="mx-3" src="{{ asset('storage/mission.jpg') }}" style="width: 40px; height:auto;">
                        <strong style="color: #0f893b">Mission</strong>
                    </div>
                    <p>Working to achieve quality education for all through institutional sponsorship.</p>
                </div>
                <div class="col-4 px-2 py-2 border-b border-gray-200 shadow-sm sm:rounded-lg" style="background-color: white; text-align:center;">
                    <div class="d-flex justify-center align-items-center">
                        <img class="mx-3" src="{{ asset('storage/vision.png') }}" style="width: 40px; height:auto;">
                        <strong style="color: #0f893b">Vision</strong>
                    </div>
                    <p>The Muslim Education Secretariat Western Province has a vision to ensure Equity for every learner</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h5 style="color: #0f893b"><strong>WHAT WE DO</strong></h5>
                    <p>In accordance with the Basic Education Act, MESWEP as the official sponsor of all Muslim Education Institutions in the counties of Kakamega, Bungoma, Busia and Vihiga:</p>
                    <ol style="list-style-type:disc">
                        <li>Promotes the identity, unity and consciousness of the Muslim community.</li>
                        <li>Promotes, develops and preserves education within the Muslim community</li>
                        <li>Manages, sponsors, administers and oversees the running of Islamic education institutions within the area of jurisdiction.</li>
                        <li>Determines, secures and safeguards the interests of Muslims, including obtaining necessary legal documentation of properties of educational institutions in their area of jurisdiction.</li>
                        <li>Mobilizes funds to the purpose of undertaking programmes that are beneficial to educational institutions within the area of jurisdiction.</li>
                        <li>Undertakes investments for the purpose of generating income to support education activities that including but not limited to bursary programs within the area of jurisdiction</li>
                        <li>Borrows and/or secures credit (within the limits of Islamic law) to finance viable investments.</li>
                        <li>Protects and advocates for equal opportunities for children, youth, women, and persons with disabilities in line with the Competence Based Curriculum vision of ‘Nurturing every learner’s potential.’</li>
                        <li>Maintains a data bank of all Muslim learners/students and those in various professions in this region</li>
                        <li>Co-operates/partners with non-political Muslim organizations and other NGOs’ in pursuit of fair interest and promotion of all other objectives already referred to whether or not such organizations are within or outside Kenya.</li>
                        <li>Carries out any other such legal activities that will promote the furtherance of the above objectives</li>
                    </ol>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h5 style="color: #0f893b; text-align:center;"><strong>EXECUTIVE COMMITTEE MEMBERS’ PROFILE</strong></h5>
                    <div class="d-flex mt-3" style="justify-content: space-around">
                        <div class="card col-5 my-2" style="border-radius: 10px;">
                            <div class="card-header" style="background-color: #0f893b; border-top-right-radius:10px; border-top-left-radius:10px"> </div>
                            <div class="card-body">                            
                                <img src="{{ asset('storage/media/commitee/cbot.png') }}" style="height: 120px; border-radius:10px; padding-left:80px">
                                <p class="my-1" style="color: #0f893b"><strong> TheChair-Board of Trustees</strong></p>
                                <div>
                                    Mr. <strong>Nasoro Rashid</strong>, 66, holds a B.Com (Accounting option); M.Sc (Finance); MBA and CPA (Kenya). Nasoro has held various Senior Finance and Management positions in various mult-nationals including Pricewaterhouse & Co; SHELL and Johnson & Johnson.
                                </div>
                                <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="expand()" id="">read more...</div>
                                <div style="display: none;" id="">
                                    <p class="my-1" style="color: #0f893b"><strong>Community Service</strong></p>
                                    Nasoro has served as the chair on a local Constituency Development Fund Committee; chaired the Lurambi Constituency Bursary Fund; the Board of Management of Kakamega General Hospital (now Kakamega County and Referral Hospital (2003-2015) and Kakamega School. He is the current chair of the Board of Management of Lugari Diploma Teachers College and Mumias Muslim Boys Secondary School. Nasoro oversaw in the inception of Mumias Muslim Girls’ Secondary School, Kakamega Muslim Secondary School and Muslim Education Secretariat-Western Province. As the chair of the Board of trustees, brother Nasoro:
                                    <ol style="list-style-type: disc;">
                                        <li>Chairs and presides over of Board of Trustee’s meetings.</li>
                                        <li>Is the custodian of all asserts of MESWEP.</li>
                                        <li>Is the spokesperson of the Board of Trustees.</li>
                                        <li>Plans for and oversees MESWEP elections.</li>
                                    </ol>
                                    <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="collapse()" id="collapse">see less</div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-5 my-2" style="border-radius: 10px;">
                            <div class="card-header" style="background-color: #0f893b; border-top-right-radius:10px; border-top-left-radius:10px"> </div>
                            <div class="card-body">                            
                                <img class="ml-15" src="{{ asset('storage/media/commitee/sbot.png') }}" style="height: 120px;  width:140px; border-radius:10px; margin-left:100px;">
                                <p class="my-1" style="color: #0f893b"><strong>The Secretary-Board of Trustees</strong></p>
                                <div>
                                    Sheikh <strong>Ismail Muchelule</strong>, 65, holds a Diploma in Agriculture. Sheikh Muchelule has worked as an Agriculture Supervisor with Mumias Sugar Company (1978-1980); an Agriculture Technical Officer with the Ministry of Agriculture (Kenya) (1980-1986); Area Leaf Manager with British American Tobacco (BAT) (1986-2000).
                                </div>
                                <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="expand()" id="r">read more...</div>
                                <div style="display: none;" id="">
                                    <p class="my-1" style="color: #0f893b"><strong>Community Service</strong></p>
                                    Sheikh Muchelule was elected councillor Mumias North Ward and served from 2002-2007. He is the current Chair of Mumias Muslim Community. Sheikh Muchelule, in conjunction with Mumias Muslim Community, oversaw the inception of the following schools: Muslim Girls-Ichinga, Emanani Muslim Secondary School, Eshibanze Muslim Secondary School, Namulungu Muslim Secondary School, Al-Badru Muslim Secondary School, Nyakwaka Muslim Secondary school, Bumanyi Muslim Primary school and Sheikh Khalifa Muslim Prinmary School. He also participated in the inception of Jamia Medical Centre- Mumias. As the secretary to the Board of Trustees, Sheikh Muchelule is responsible for:
                                    <ol style="list-style-type: disc;">
                                        <li>Liaising with the Chairperson to issue Meeting Notices.</li>
                                        <li>Recording and Custodian of Trustee Minutes.</li>
                                        <li>Handling all BoT correspondents</li>
                                        <li>Act as the Chairperson in absence of chairperson and he appoints an acting - secretary (from Present Members) </li>
                                    </ol>
                                    <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="collapse()" id="collapse">see less</div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="d-flex" style="justify-content: space-around">
                        <div class="card col-7 my-2" style="border-radius: 10px;">
                            <div class="card-header" style="background-color: #0f893b; border-top-right-radius:10px; border-top-left-radius:10px"> </div>
                            <div class="card-body">                            
                                <img class="ml-15" src="{{ asset('storage/media/commitee/coordinator.png') }}" style="height: 140px; border-radius:10px; margin-left:100px;">
                                <p class="my-1" style="color: #0f893b"><strong>The Coordinator</strong></p>
                                <div>
                                    Dr. <strong>Hassan Ngeri B.G (B.Ed; M.Phil, Ph.D)</strong> 60, is a renowned educationist. As a professional teacher, Dr. Ngeri rose through ranks from a classroom teacher to an education officer in the Ministry of Education, Science and Technology. He has been a curriculum developer with Kenya Institute of Curriculum Development for over 20 years during which time he has authored and co-authored various titles. He is one of the education specialists who developed the Islamic Integrated Education Curriculum and the current joint Madrassa Curriculum which has been approved by the Kenya Institute of Curriculum Development. He is a trained Item Writer with the Kenya National Examinations Council. Dr. Ngeri has worked with the Research Triangle International (RTI), Women Education Researchers of Kenya (WERK) in Early Literacy Program dubbed ‘TUSOME.’ He is a National Competency Based Curriculum Consultant; a Career Guidance Counsellor and a Motivational Speaker. He has worked with The Lutheran World Federation as an Education Officer in charge of early literacy, the Quality Assurance and Standards Officer and Education Advisor in refugee education. 
                                </div>
                                <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="expand()" id="">read more...</div>
                                <div style="display: none;" id="">
                                    <p class="my-1" style="color: #0f893b"><strong>Community Service</strong></p>
                                    Dr. Ngeri has served on several local and national committees to further community interests. He is currently serving on the National Executive Council of Muslim Education Council (MEC) and the current MEC representative on the Kakamega County Education Board.  He has served as the Secretary to Kakamega County Education Fund Committee (2016-2019) and a Co-patron of the Masinde Muliro University Muslim Students Association. He actively participated in the inception of Kakamega Muslim Secondary School and Muslim Education Secretariat-Western Province. As the MESWEP coordinator, he: 
                                    <ol style="list-style-type: disc;">
                                        <li>Is the technical advisor to MESWEP,</li>
                                        <li>Coordinates all activities of MESWEP,</li>
                                        <li>Ensures all MESWEP programs are implemented as planned,</li>
                                        <li>In conjunction with the Executive, plans for and ensures the meeting calendar is adhered to,</li>
                                        <li>Networks and develops linkages with MoE and like-minded NGOs, CBOs, </li>
                                        <li>In conjunction with the executive, draws periodical work plans as the case/need may arise, designs and facilitates implementation of effective advocacy strategies and maintains linkages between our educational institution and the community.</li>
                                    </ol>
                                    <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="collapse()" id="collapse">see less</div>
                                </div>
                            </div>
                        </div>    
                        <div class="card col-4 my-2" style="border-radius: 10px;">
                            <div class="card-header" style="background-color: #0f893b; border-top-right-radius:10px; border-top-left-radius:10px"> </div>
                            <div class="card-body">                            
                                <img class="ml-15" src="{{ asset('storage/media/commitee/chairman.png') }}" style="height: 140px; width: 130px; border-radius:10px; margin-left:100px;">
                                <p class="my-1" style="color: #0f893b"><strong>The Chairman</strong></p>
                                <div>
                                    Mr. <strong>Ramadhan Baraza</strong>, 69, holds a Master’s degree in Project Management and currently taking his Ph.D. He is a retired renowned educationist with a vast teaching experience in technical institutions. He has steadily rose in ranks from a Tutor to Senior Lecturer to Deputy Principal to Principal. He retired as the Principal of Bumbe Technical College having taught in various technical colleges in the country.
                                </div>
                                <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="expand()" id="">read more...</div>
                                <div style="display: none;" id="">
                                    <p class="my-1" style="color: #0f893b"><strong>Community Service</strong></p>
                                    Mr. Baraza is a co-founder of CHES a community organization that funds secondary education for vulnerable children in Kakamega Sub County. He is the current Chair of Buhayi Muslim Secondary School. He has also worked with the County Government of Kakamega as a Director on the County’s Dairy Board. As the chair MESWEP, Mr. Baraza.
                                    <ol style="list-style-type: disc;">
                                        <li>Is the spokesperson of MESWEP,</li>
                                        <li>Calls for and presides over all meeting namely committee meetings, Executive meetings, AGMs and special AGMs,</li>
                                        <li>Is one of the signatories to the MESWEP’s bank account,</li>
                                        <li>Mediates among the board, committee and the Umma.</li>
                                    </ol>
                                    <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="collapse()" id="collapse">see less</div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="d-flex" style="justify-content: space-around">
                        <div class="card col-6 my-2" style="border-radius: 10px;">
                            <div class="card-header" style="background-color: #0f893b; border-top-right-radius:10px; border-top-left-radius:10px"> </div>
                            <div class="card-body">                            
                                <img class="ml-15" src="{{ asset('storage/media/commitee/secretary.png') }}" style="height: 140px; border-radius:10px; margin-left:100px;">
                                <p class="my-1" style="color: #0f893b"><strong>The Secretary</strong></p>
                                <div>
                                    Madam <strong>Aziza J. Ramadhan</strong>, 53, a B.Ed graduate of Kenyatta University and currently taking her Master’s degree at Kibabii University is the current principal of Makunda Muslim Secondary School in Matungu Sub County in Kakamega County. Madam Aziza has risen in ranks from a classroom teacher to Principal courtesy of her hard work in the education circles. She is a dedicated teacher who is, by her position, a great asset to MESWEP.
                                </div>
                                <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="expand()" id="">read more...</div>
                                <div style="display: none;" id="">
                                    <p class="my-1" style="color: #0f893b"><strong>Community Service</strong></p>
                                    Madam Aziza is the chairperson of Matungu Principals’ Welfare; Secretary to MESWEP, and Secretary Muslim Head teachers’ Association. As the secretary MESWEP, Madam Aziza:
                                    <ol style="list-style-type: disc;">
                                        <li>Is the official correspondent and documents custodian of MESWEP,</li>
                                        <li>Keeps committee’s files and receiving correspondence,</li>
                                        <li>Makes prior preparation and circulation of meeting’s agenda,</li>
                                        <li>Maintains records of members and volunteer for various functions.</li>
                                        <li>Presides over both the executive and committee & general meetings when the chairman and his vice are both absent,</li>
                                        <li>Writes and presents of minutes during meetings,</li>
                                        <li>Is one of the signatories of the MESWEP’s bank account,</li>
                                        <li>Ensures that this constitution is respected, upheld and defends it and advices all members over the constitutionality of their actions as interpreted in this constitution,</li>
                                    </ol>
                                    <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="collapse()" id="collapse">see less</div>
                                </div>
                            </div>
                        </div>    
                        <div class="card col-4 my-2" style="border-radius: 10px;">
                            <div class="card-header" style="background-color: #0f893b; border-top-right-radius:10px; border-top-left-radius:10px"> </div>
                            <div class="card-body">                            
                                <img class="ml-15" src="{{ asset('storage/media/commitee/assistant_secretary.png') }}" style="height: 140px; width: 130px; border-radius:10px; margin-left:100px;">
                                <p class="my-1" style="color: #0f893b"><strong>The Assistant Secretary</strong></p>
                                <div>
                                    Mr. <strong>Sadat Mansoor Kibira</strong>, (39), holds a Bachelor of Education degree in English/Literature from Maseno University. Sadat has a teaching career spanning to over 15 years. He represents Muslim Education Council on the Busia County Education Board.
                                </div>
                                <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="expand()" id="">read more...</div>
                                <div style="display: none;" id="">
                                    <p class="my-1" style="color: #0f893b"><strong>Community Service</strong></p>
                                    Sadat is a community worker with passion for Education, Youth Leadership, Peace, Vocational Training and Development. As a member of Busia County Youth Technical working Group. Mansoor has participated in the development of guidelines on youth apprenticeship under the guidance of the International Labour organization (ILO) and the County Government of Busia. He has also participated in the development of guidelines on chaplaincy in schools under the Ministry of Education. Mansoor serves as the secretary to Busia Muslim council which has been on the fore front in assisting and empowering Budalangi flood victims and other vulnerable groups in Busia. As an assistant treasurer, Mansoor assumes all the duties of the secretary when the secretary is absent,
                                    <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="collapse()" id="collapse">see less</div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="d-flex" style="justify-content: space-around">
                        <div class="card col-8 my-2" style="border-radius: 10px;">
                            <div class="card-header" style="background-color: #0f893b; border-top-right-radius:10px; border-top-left-radius:10px"> </div>
                            <div class="card-body">                            
                                <img class="ml-15" src="{{ asset('storage/media/commitee/treasurer.png') }}" style="height: 140px; border-radius:10px; margin-left:100px;">
                                <p class="my-1" style="color: #0f893b"><strong>The Treasurer</strong></p>
                                <div>
                                    <strong>Halima Abdi</strong>, 47, a mother of 4 holds a B.sc in Agricultural economics from Edgerton University, a Post Graduate Diploma in Education from Maseno university, a Master’s degree in Agricultural Information and Communication Management, a Senior Management Course from Kenya School of Government and currently pursuing a PhD in Agricultural Extension and Rural Development at Masinde Muliro University of Science and Technology. Halima boasts of a versatile career in Education, Agriculture, Community Development and Project Management. She has held significant leadership appointments including serving as a Principal Kisumu Muslim Secondary School, a pioneer County Executive Committee Member in Vihiga County in the following departments: Natural Resources and forestry, Agriculture Livestock and Fisheries and Public Service and Administration. Halima is currently a Tutorial Fellow at Kaimosi University College in the Department of Biological Sciences and Agriculture.
                                </div>
                                <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="expand()" id="">read more...</div>
                                <div style="display: none;" id="">
                                    <p class="my-1" style="color: #0f893b"><strong>Community Service</strong></p>
                                        Halima is the current chairperson of Vihiga Muslim Women Development Initiative. She also serves as a board member on several school Boards of Management in vihiga. She is a member of Agriculture Society of Kenya. As the treasurer, Sis. Halima:
                                    <ol style="list-style-type: disc;">
                                        <li>Maintains records of all financial transactions.</li>                            
                                        <li>Prepares and presents annual report.</li>
                                        <li>Collects and deposits all funds received on behalf of MESWEP, EXCEPT proceeds from assets which will be collected by the Board of Trustees and forwarded to him/her for banking.</li>
                                        <li>Is the mandatory signatory of the MESWEP’s bank account(s).</li>
                                        <li>Prepares the annual budget in consultation with the committee.</li>
                                        <li>Prepares and presents quarterly financial report to the committee.</li>
                                    </ol>
                                    <div style="text-align: right; color: #0f893b; cursor: pointer;" onclick="collapse()" id="collapse">see less</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function expand(){
            document.getElementById("cbot").style.display = "block"
            document.getElementById("read_more").style.display = "none"
        }
        function collapse(){
            document.getElementById("cbot").style.display = "none"
            document.getElementById("collapse").style.display = "block"
            document.getElementById("read_more").style.display = "block"
        }
    </script>
</x-app-layout>