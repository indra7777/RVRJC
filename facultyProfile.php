<?php include './includes/header.php' ?>

<link href="./css/staff.css" rel="stylesheet">
<script src="./js/staff.js"></script>
<main class="inner-page-container">
  <div class="incontainer">
    <div class="row" style="margin-right=500px">
      <div class="sidebar col-md-3">
        <div class="sidebar-sticky">
          <div class="left-faculty-box">
            <div class="faculty-image-section">
              <div class="faculty-image">
                <img src="./images/faculty/atla-srikrishna.jpg" alt="Dr. A.Srikrishna">
              </div>
            </div>
            <div class="left-info-box" style="padding-top:25px;">
              <div class="left-role-block">
                <h5>Responsiblities</h5>
                <p> Professor</p>
                <p> Head Of Departement</p>
              </div>
              <div class="personal-info-block">
                <h5>Contact</h5>
                <p><b>Mail:</b><span><a class="mail text-dark" href=""> ask@rvrjc.ac.in</a></span></p>
                <p><b>Phone:</b>
                  <a>+91863228854,+919866281628</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-column col-md-8 col-lg-9">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./people.php">people</a></li>
            <span id="fill"></span>
          </ul>
          <h1>Dr. A.Srikrishna</h1>
        </div>
        <div class="inner-content-box" id="box">
          <p class="text">Dr. Atla Srikrishna is the Head of Inforation Technology Deppartment in R.V.R & J.C college of Engineering, Guntrur. She has also been a faculty member in the Information Technolgy at RVR & JCCE since 1995</p>
          <div class="content-block table-responsive">
            <table class="personal-data-table-right table table-borderless">
              <tr>
                <td>Date of Birth</td>
                <td>: <span id="dob"></span> <span style="opacity:0;" id="dateOfBirth">1964-09-06</span></td>
              </tr>
              <tr>
                <td>Date of Joining</td>
                <td>: <span id="doj"></span> <span style="opacity:0;" id="dateOfJoining">1995-08-28</span></td>
              </tr>
              <tr>
                <td>Total Teaching Experince</td>
                <td>: 33 Years and 5 Months. (as on 23-02-2024)</td>
              </tr>
              <tr>
                <td>Total teaching experience in this college</td>
                <td>: <span id="totalExperienceInCollege"></span><sub>upto date</sub></td>
              </tr>
            </table>
            <script>
              document.getElementById('dob').innerText = dateToWords(document.getElementById('dateOfBirth').innerText);
              document.getElementById('doj').innerText = dateToWords(document.getElementById('dateOfJoining').innerText);
              document.getElementById('totalExperienceInCollege').innerText = experience(document.getElementById("dateOfJoining").innerText);
            </script>
            <!-- <h5>Date of Birth:</h5>
            <p>14-08-65</p>
            <h5>Date of Joining:</h5>
            <p>11-08-90</p>
            <h5>Total Teaching Experince:</h5>
            <p>33 Years and 5 Months. (as on 23-02-2024)</p>
            <h5>Total teaching experience in this college:</h5>
            <p>28 Years and 5 Months.</p> -->
          </div>
          <div class="content-block">
            <h5>Research Interests:</h5>
            <p>Image Processing & Computer Vision, Information Security and Algorithms
          </div>
          <div class="content-block">
            <h5>Qualifications:</h5>
            <ul>
              <li> Ph.D, JNTUK, Kakinada, Andhra Pradesh, India. </li>
              <li>M.Tech, JNTUH, Hyderabad, Andhra Pradesh, India.</li>
              <li>AMIE(ECE), Institute of Engineers, Kolkata, India</li>
            </ul>
          </div>
          <div class="content-block">
            <div class="publication-company-pic-flex">
              <a href="https://vidwan.inflibnet.ac.in/profile/186613" imageanchor="1" target="_blank"><img src="./images/faculty/publicationpics/vid.jpg" style="filter: invert(0);"></a>
              <a href="https://publons.com/researcher/2324895/srikrishna-atluri/" imageanchor="1" target="_blank"><img src="./images/faculty/publicationpics/pub.jpg" style="filter: invert(0);"></a>
              <a href="https://www.scopus.com/authid/detail.uri?authorId=26432395500" imageanchor="1" target="_blank"><img src="./images/faculty/publicationpics/scopus.jpg" style="filter: invert(0);"></a>
              <a href="https://orcid.org/0000-0002-5774-8875" imageanchor="1" target="_blank"><img src="./images/faculty/publicationpics/orcid.png" style="filter: invert(0);"></a>
              <a href="https://scholar.google.co.in/citations?user=N6093l8AAAAJ&amp;hl=en" imageanchor="1" target="_blank"><img src="./images/faculty/publicationpics/googlescholar.jpg" style="filter: invert(0);"></a>
              <a href="https://www.researchgate.net/profile/A_Srikrishna" imageanchor="1" target="_blank"><img src="./images/faculty/publicationpics/rg.jpg" style="filter: invert(0);"></a>
            </div>
          </div>
          <div class="content-block">
            <div class="project-sanctioned-block">
              <h5>Internal R&D Project Sanctioned</h5>
            <table cellspacing="0" cellpadding="0"  class="project-sanctioned-table table table-borderless table-striped">
              <thead>
                <tr>
                  <td>Project Title</td>
                  <td>Funding Agency</td>
                  <td>Principal Investigator/ Coordinator</td>
                  <td>Co-Investigator</td>
                  <td>Amount Sanctioned in Rs.</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>MODROBS-IoT</td>
                  <td>AICTE</td>
                  <td>Dr. A.Srikrishna</td>
                  <td>--</td>
                  <td>Rs. 5,16,000/-</td>
                  <td>Ongoing</td>
                </tr>
                <tr>
                  
                  <td>Skeleton based Shape Representation Techiniques for Object Recognition</td>
                  <td>UGC MRP</td>
                  <td>Dr. A.Srikrishna</td>
                  <td>Dr. M.Pompapathi</td>
                  <td>Rs. 10,25,000/-</td>
                  <td>Completed</td>
                </tr>
                <tr>
                  <td>Voice Over Internet Protocol Lab</td>
                  <td>AICTE</td>
                  <td>Dr. A.Srikrishna</td>
                  <td>--</td>
                  <td>Rs. 5,00,000/-</td>
                  <td>Completed</td>
                </tr>
              </thead>
            </table>
            </div>
          </div>
          <div class="content-block">
            <h4>Total Journals & Conferences (<span id="totalPapersCount">0</span>)
              <span style="font-size: 1.2rem;color:black;"><em>(Scopus Indexed-20, SCI/SCIE-6, Web of Science-10, UGC-13)</em></span>
            </h4>
            <h5>International/National Journals
              (<span id="journalsCount">0</span>)
              <span style="font-size: 1.2rem;color:black;"><em>(Scopus Indexed-20, SCI/SCIE-6, Web of Science-10, UGC-13)</em></span>
            </h5>
            <ol id="journalsList">
              <li>Ravi Babu Devareddi, Dr. A. Srikrishna,<b> " AN EDGE CLUSTERED SEGMENTATION BASED MODEL FOR PRECISE IMAGE RETRIEVAL"</b>, Indian Journal of Computer Science and Engineering (IJCSE) , Vol. 13 No. 3 May-Jun 2022, DOI : 10.21817/indjcse/2022/v13i3/221303094<b>(SCOPUS Indexed)</b></li>
              <li>Nadendla, H.R., Srikrishna, A., Rao, K.G.,<b> "FSOA-DNFNet: Incremental indexing and image classification using hybrid optimization-based deep neuro Fuzzy network"</b>, Concurrency and Computation: Practice and Experience, May 2022<b>(Scopus, SCIE, WoS)</b></li>
              <li>Nadendla, H.R., Srikrishna, A., Gangadhara Rao, K., "Rider and Sunflower optimization-driven neural network for image classification", Web Intelligencethis link is disabled, 2021, 19(1-2), pp. 41-61<b>(SCOPUS Indexed)</b></li>
              <li>Gutta Srinivasa Rao, Atluri Srikrishna, "Contrast Enhancement of Poor-Quality Satellite Images Through Morphological Operations", Traitement du Signal, Vol. 38, No. 3, June, 2021, pp. 821-827, ISSN:0765-0019(p) 1958-5608(o) <b>(Scopus, SCIE, WoS)</b></li>
              <li>Rao, G.S., Srikrishna, A., "Image pixel contrast enhancement using enhanced multi histogram equalization method", International information and Engineering technology Association, pg: 95-101, 28 February 2021 <b>(SCOPUS Indexed)</b></li>
              <li>Gutta Srinivas Rao, Atluri Srikrishna, "Morphological transformation in Poor Lighting Images for Image Contrast Enhancement", Turkish Journal of Computer and Mathematics Education, ISSN: 13094653, Vol.12, No.5, 5 April 2021</li>
              <li>Dr.A.Srikrishna, Madhulika Yarlagadda, Dr.K.Gangadhara Rao, "Document Retrieval and Cluster Based Indexing using Rider Spider Monkey Optimization Algorithm", International Journal of Recent Technology and Engineering (IJRTE), vol 8, issue 6, 1318-1327<b>(SCOPUS Indexed)</b></li>
              <li>Madhulika Yarlagadda, Dr.GR Kancherla, Dr.Srikrishna Atluri, "Incremental document clustering using fuzzy-based optimization strategy", Evolutionary Intelligence, September 2020, DOI: 10.1007/s12065-019-00335-1, ISSN: 1864-5909<b>(SCOPUS Indexed, WoS, UGC)</b></li>
              <li>A.V.Kavitha, Dr.A.Srikrishna, Ch. Satyanarayana, "Classification of Land Cover from Remote Sensing Images using Morphological Linear Contact Distributions and Rough Sets", International Journal of Recent Technology and Engineering (IJRTE) ISSN: 2277-3878, Volume-8 Issue-3, September 2019 Pages 676-688<b>(SCOPUS Indexed)</b></li>
              <li>Y.Madhulika, Dr.Srikrishna A, Dr.K.Gangadhara Rao, "Frequent itemset-based feature selection and Rider Moth Search Algorithm for document clustering", Journal of King Saud University-Computer and Information Sciences, https://doi.org/10.1016/j.jksuci.2019.09.002, Accepted date: 04.09.2019<b>(SCOPUS Indexed, WoS, UGC)</b></li>
              <li>Gutta Srinivas Rao, Dr.Atluri Srikrishna, Nagesh Vadaparthi, "Weber's Law based Camera Response Model for Low Light Image Contrast Enhancement", International Journal of Intelligent Engineering and Systems, Vol.12, No.5, MAY-2019, DOI: 10.22266/ijies2019.1031.04<b>(SCOPUS Indexed, UGC)</b></li>
              <li>Kavitha A.V., Dr.Srikrishna A., and Satyanarayana Ch., "Remote sensing colour image classification with Rough sets", Journal of Applied Science and Computations (JASC), Volume IV, issue 2, February 2019., 10.1007/978-3-540-71441-5_92, ISSN: 1076-5131<b>(UGC)</b></li>
              <li>Kavitha A.V., Dr.Srikrishna A., and Satyanarayana Ch., "Crop image classification using Sperical contact distributions from remote sensing images", Journal of King Saud University- Computer and Inforamtion Sciences, February 2019, DOI:10.1016/j.jksuci.2019.02.008, ISSN:1319-1578<b>(SCOPUS Indexed, UGC)</b></li>
              <li>Kavitha A.V., Dr.Srikrishna A., and Satyanarayana Ch., "Unsupervised linear contact distributions segmentation algorithm for land cover high resolution panchromatic images ", Multimedia Tools and Applications - an International Journal, ISSN 1380-7501, DOI 10.1007/s11042-018-6693-y, Volume 79, Issue 13-14 Pages 8781-8799, December 2018.<b>(SCOPUS Indexed, SCI, UGC)</b></li>
              <li>Kavitha A.V., Dr.Srikrishna A., and Satyanarayana Ch., "An efficient texture feature extraction algorithm for high resolution land cover remote sensing image classification", International Journal of Image, Graphics and Signal processing (IJIGSP), Volume 10, issue 12, December 2018, 10.5815/ijigsp, 2074-9074(p) 2074-9082(o)</li>
              <li>V.Sesha Srinivas, Dr.A.Srikrishna, Dr.B.Eswara Reddy "Evolutionary Image Segmentation with Dimensionality Reduction", International Journal of Advanced Research in Dynamical and Control Systems JARDCS, Vol 9 , Issue 4, pp 348-357, Dec 2017, ISSN: 1943-023X<b>(SCOPUS Indexed, UGC)</b></li>
              <li>Dr.A.Srikrishna, P.Vickram, M.Pompapathi "Computer Assisted Cataract Identification system from Noisy Images", International Journal of Scientific &amp; Engineering Research, Volume 7, Issue 9, pp: 162-168. ISSN 2229-5518, September-2016. DOI: 10.1080/01621459.1981.10477623.</li>
              <li>Dr.A.Srikrishna and V.Sesha Srinivas "A Survey on Design Paradigms to solve 0/1 Knapsack Problem", International Journal of Scientific &amp; Engineering Research, Volume 7, Issue 11, ISSN 2229-5518, November-2016.</li>
              <li>Dr.A.Srikrishna, Professor &amp; Head, Dr. B. Eswara Reddy, Sri M. Pompapathi, Assistant Professor, "Pixon Based Image Denoising Scheme by Preserving Exact Edge Locations" Springer Journal of The Institution of Engineers (India): Series B (Electrical, Electronics &amp; Telecommunication and Computer Engineering )DOI: 10.1007/s40031-014-0178-9, Volume 97, Issue 3, 1 September 2016, Pages 395-403<b>(SCOPUS Indexed)</b></li>
              <li>Dr.A.Srikrishna, P.Vickram, D.Swapna 'Offline Signature Verification Using Support Local Binary Pattern" International Journal of Artificial Intelligence and Applications (IJAIA), Vol 7, No. 6, November 2016. DOI: 10.5121/ijaia.2016.7607</li>
              <li>Dr.A.Srikrishna, Professor &amp; Head, Prof. B. Eswara Reddy, M. Pompapathi "Non Linear Robust Edge Detector for Noisy Images", Journal on Image Processing, Vol.2, Issue 4, pp.30-38, ISSN:2349-4530, Dec. 2015.</li>
              <li>Dr.A.Srikrishna, Professor&amp; Head, P. AdityaKiran, "Shoulder Surfing Proof Secure Authentication Algorithm Using Textual Passwords", International Journal of Scientific &amp; Engineering Research (IJSER), Vol.6, Issue 8, pp.1373-1377, ISSN: 2229-5518, Aug. 2015.</li>
              <li>Dr.A.Srikrishna, Professor&amp; Head, M.Pompapathi and G.Srinivasa Rao, "Parametric based Morphological Transformation for Contrast Enhancement of Color Images in Poor-Lightening" Springer journal of Sadhana Academy proceedings in Engineering Sciences, PRINT ISSN: 0256-2499 (Online ISSN 0973-7677) DOI: 10.1007/s12046-015-0347-9, Publisher: Springer India. Vol.40 Issue (2), pp: 395-410, Publication: 01-04-2015.<b>(SCOPUS Indexed, SCIE, WoS, UGC)</b></li>
              <li>Dr.A.Srikrishna, V.Sesha Srinivas, Rajiv Jetsyn, "A naive Fuzzy clustering method for pixel segmentation by using Differential evolution", International Journal of Advanced Trends in computer Science and Engineering, Vol.3, no.5, pp. 5-10, oct.2014, ISSN 2278-3091. DOI:01.IJRTET.9.1.560</li>
              <li>G.Srinivasa Rao, Dr.A.SriKrishna, Dr. S. Mahaboob Basha, CH. Jeevan Prakash, "Object-Based Image Enhancement Technique for gray scale images", International Journal Of Advanced Information Technology(IJAIT), Vol. 4 No. 3, pp. 9-23,June 2014, DOI:10.5121/ijait.2014.4302.</li>
              <li>Dr.A.SriKrishna, G.SrinivasaRao, M.Sravya, "Contrast Enhancement Techniques using Histogram Equalization Methods on Color Images with Poor Lighting", International Journal of Computer Science, Engineering Applications (IJCSEA), vol.2, no.4, pp.15-24, Aug.2013,DOI : 10.5121/ijcsea.2013.3402.</li>
              <li>A.Srikrishna, B. Eswara Reddy, V.Sesha Srinivas, "Automatic Feature Subset Selection-Using Genetic Algorithm for Clustering", International journal on Recent Trends in Engineering and Technology, vol.9,no.1, pp.85,July.2013, DOI:01.IJRTET.9.1.5.</li>
              <li>G.Rama Mohan Babu, Dr.B.Raveendra Babu, A. Sri Krishna, N.Venkateswara Rao, "Object Recognition using Disk based Morphological Shape Decomposition Features", International Journal of Computer Applications, volume 73-No.2, pp.29-33,July. 2013, DOI: 10.5120/12714-9528.</li>
              <li>G.Rama Mohan Babu, Dr.B.Raveendra Babu, A. Sri Krishna, N.Venkateswara Rao, "Shape Matching And Recognition Using Hybrid Features From Skeleton And Boundary", International Journal of Computers &amp; Technology, June 5, 2013,Vol-7,issue-2,pp:558-564,ISSN:22773061. DOI: 10.24297/ijct.v7i2.3457</li>
              <li>Dr.K.Karteeka Pavan, V.Sesha Srinivas, A.Srikrishna and B.Eswara Reddy, "Automatic Tissue Segmentation in Medical Images using Differential Evolution", Journal of Applied Science, Vol-12, issue-6, pp:587-592, 2012, ISSN NO: 1812-5654, DOI:10.3923/jas.2012.587.592.<b>(SCOPUS Indexed)</b></li>
              <li>M.Pompapathi, Dr.A.SriKrishna, Ch.Sudhasri, "Edge detectors on Gray scale images- A Comprehensive survey", ANU Journal of Engineering &amp; Technology Vol.2, june-december 2012.</li>
              <li>Dr.A.Srikrishna,G.Rammohan Babu, M.Ramesh and Dr.B.Raveendra Babu-2011 "A Rotational Invariant Connected Skeleton with Reduced Skeleton Points", International Journal of Research and Reviews in Computer Science (IJRRCS), Vol. 2, No. 3, June 2011. ISSN: 2079-2557, PP: 659-663.</li>
              <li>N.Venkateswar Rao, Dr. A.Srikrishna, G.Rammohan Babu and Dr.B.Raveendra Babu-2011 "An Efficient Feature Extraction and Classification of Handwritten Digits using Neural Networks", International Journal of Computer Science, Engineering and Applications (IJCSEA), Vol.1, No.5, October 2011.ISSN:2230-9616(online); 2231-0088(print), DOI:10.5121/ijcsea.2011.1505, pp: 4757.</li>
              <li>Dr.V.Vijaya Kumar Dr.A.Srikrishna, R.Radhika, and Dr.B.Raveendra babu-2011 "Classification and Recognition of Handwritten Digits by Using Mathematical Morphology", Sadhana - Academy Proceedings in Engineering Science,Indian Academy of Sciences Banglore,India, Vol.35, Part 4, August 2010. ISSN: 0256-2499, DOI: 10.1007/s12046-010-0031-z, pp: 419-426.<b>(SCOPUS Indexed, SCIE, WoS, UGC)</b></li>
              <li>G.Rama Mohan Babu, P.Srimaiyee, Dr.A.Srikrishna (2010), "Text Extraction from Heterogeneous Images Using Mathematical Morphology", Journal of Theoretical and Applied Information Technology, Vol: 16-pp.39-47. ISSN: 1992-8645, E-ISSN: 1817-3195, PP: 39-47.<b>(SCOPUS Indexed, UGC)</b></li>
              <li>Dr.A.Srikrishna, V.Vijaya Kumar and P.Premchand and Dr.B.Raveendra Babu-2009 "A Method of Error Free Shape Reconstruction", International Journal on Graphics, Vision and Image Processing, Vol.09, Issue I, 2009. ISSN: 1687-398X (print); 1687-3998(online); 1687-4005(CD-ROM), pp: 1-7.</li>
              <li>V.Vijaya Kumar, Dr.A.Srikrishna, and G.Hemanth Kumar-2009 "Error Free Iterative Morphological Decomposition Algorithm for Shape Representation" International Journal of Computer Science, ISSN:1549-3636,DOI:10.3844/jcssp.2009.71.78, Volume 5, Issue 1, 2009, Pages 71-78<b>(SCOPUS Indexed, UGC)</b></li>
              <li>V.Vijaya Kumar, A.Srikrishna, D.V.L.N. Somayajulu, and DR.B. Raveendra Babu, (2008) "An Improved Iterative Morphological Decomposition Approach for Image Skeletonization"-ICGST-GVIP Journal, ISSN: 1687-398X, Issue 1, June 2008, pp.47-54. DOI:10.5121/ijcsit.2015.7110 </li>
              <li>Dr.V.Vijaya kumar, A.Srikrishna, Sadiq Ali Shaik, S.Trinath, (2008), "A New Skeletonization Method Based on Connected Component Approach", IJCSNS International Journal of Computer Science and Network Security, VOL.8 No.2, pp.133-137.</li>
              <li>U.S.N. Raju, A.Srikrishna, V.Vijaya Kumar, A. Suresh,(2008), "Extraction Of Skeleton Primitives On Wavelets", Journal of Theoretical and Applied Information Technology,Vol.4,pp.1065-1074, pp:1-8. ISSN:18173195(p)19928645(o)<b>(SCOPUS Indexed, UGC)</b></li>
            </ol>
          </div>
          <div class="content-block">
            <h5>International/National Conferences
              (<span id="conferencesCount">0</span>)
            </h5>
            <ol id='conferencesList'>
              <li>Dr.A.Srikrishna, "Review on Content-Based Image Retrieval Models for Efficient Feature Extraction for Data Analysis", International Conference on Electronics and Renewable Systems(ICEARS 2022) organized by St. Mother Teresa Engineering College, Tuticorin, Tamil Nadu, India held on 16-18, March 2022<b>(IEEE)</b></li>
              <li>Chandana, D.S., Chigurupati, K., Srikrishna, A., Venkateswarlu, B, "An Optimal Image Dehazing Technique Using Dark Channel Prior", 2019 2nd International Conference on Intelligent Computing, Instrumentation and Control Technologies, ICICICT 2019 Article number 8993313, Pages 609-614<b>(SCOPUS Indexed)</b></li>
              <li>G. Sravan Kumar, Srikrishna A, "Privacy Sustaining Constant Length Ciphertext-Policy Attribute-Based Broadcast Encryption", Advances in Intelligent Systems and Computing, DOI:10.1007/978-981-13-3600-3_30, ISSN: 2194-5357, Volume 900, 2019, Pages 313-324<b>(SCOPUS Indexed)</b></li>
              <li>V.Sesha Srinivas, "Automatic Clustering Simultaneous Feature subset Selection using Differential Evolution" has presented a paper in International conference on Signal Processing and Integrated Networks held on 22nd-23rd February, 2018 at Amity University, Noida, India. doi:10.1109/spin.2018.8474233 Pages:468-473<b>(SCOPUS Indexed, Web of Science)</b></li>
              <li>V.Sesha Srinivas, Dr.A.Srikrishna, "Automatic Feature Subset Selection for Clustering Images using Differential Evolution" presented in IEEE 1st International Conference on Multimedia Information Processing and Retrieval (IEEE MIPR 2018) to be held at Miami, FLORIDA, USA during April 10-12, 2018. DOI: 10.11.09/MIPR.2018.00051<b>(SCOPUS Indexed)</b></li>
              <li>Dr.A.Srikrishna, D.Swapna, Vikram P, Mr.V. SeshaSrinivas, presented a paper on "A Survey on Local Patterns for Signature Verification" Proceedings of the 5th IEEE International Conference on Communication and Signal Processing, Adhiparasakthi Engineering College, Chennai, during 6-8 April 2016. DOI: 10.1109/ICCSP.2016.7754234, Pages 700-704<b>(SCOPUS Indexed, Web of Science)</b></li>
              <li>Dr.A.Srikrishna, Ch.Haripriya, "Face Recognition with Varying Facial Expression Using Local Directional Number Pattern", IEEE Power, Communication and Information Technology Conference, organized by Siksha 'O' Anusandhan University, Bhubaneswar, during 15-17 Oct. 2015. DOI : 10.1109/PCITC.2015.7438071, Pages 615-619<b>(SCOPUS Indexed, Web of Science)</b></li>
              <li>Dr.A.Srikrishna, Dr.B.Eswara Reddy, Mr. V.SeshaSrinivas, "Detection of Lesion in Mammogram Images using Differential Evolution Based Automatic Fuzzy Clustering", International Conference on Computational Intelligence and Soft Computing (ICCISC-2015), organized by Institute of Bioinformatics and Computational Biology (IBCB), Visakhapatnam, during 19-20 Dec. 2015. DOI, 10.1007/978-981-10-0308-0_5, Pages 61-68<b>(SCOPUS Indexed)</b></li>
              <li>Dr.A.Sri Krishna, B.Eswara Reddy, M. Pompapathi has presented a paper on "Color Edge Detection for Noisy Images by Nonlinear Prefiltering and Block-by-block Rotations", at IEEE ICCSP 2015 Conference. DOI: 10.1109/ ICCSP.2015.7322710<b>(SCOPUS Indexed, Web of Science)</b></li>
              <li>Dr.A.Sri Krishna, M.Pompapathi presented and published a paper entitled "Review of Image Denoising Techniques" in the Proceedings National Conference on RF Wireless Communication and Signal Processing, held at Bapatla Engineering college, Bapatla, Andhra Pradesh, conducted by department of Electronics and communication Engineering, during 17-18 November 2014, pp:96-101.</li>
              <li>Dr.A.Srikrishna, Sri V.Sesha Srinivas, Asst. Prof., has presented a paper on "A naive Fuzzy Clustering Method for Pixel Segmentation by using differential Evolution", at International conference on Advances in computer Science and Software Engineering on 10th October 2014, organized by St. Ann's College of Engineering &amp; Technology.</li>
              <li>Dr.A.Srikrishna, Professor &amp; Head, Dr. B. Eswara Reddy, Sri M. Pampapathi, Assistant Professor "Non-Linear Noise Suppression Edge Detection Scheme for Noisy Images" Proceedings of the IEEE international conference on recent advances and innovations in engineering (ICRAIE - 2014), Organized by Poornima University, Jaipur, during 9 - 11, May2014.ISBN:978-1-4799-4041-7,DOI:10.1109/ICRAIE.2014.6909192, Publisher:IEEE,pp:1-6.</li>
              <li>Dr.A.Srikrishna, Dr.B.Eswara Reddy, M.pompapathi, "A Review Of Gradient Based Edge Detection Techniques", International conference on Emerging trends in Electrical, Electronics and Communication Techniques, ICECIT, 2012 held at SRIT, Ananthapur, India, pp:498-502. And published by Elsevier digital library conference proceedings in http://www.elsevierst.Com/ Conference Book detail.</li>
              <li>G.Rama Mohan Babu, Dr.A.Sri Krishna, Kishore Challa, Dr.B.Raveendra Babu, "An Error free compression Algorithm using Morphological Decomposition",International Conference on Recent Advances in Computing and Software Systems, 978-1-4673-0255-5/12/$31.00_c 2012 IEEE,pp:33-36. DOI: 10.1109/RACSS.2012.6212693.<b>(SCOPUS Indexed)</b></li>
              <li>D.Amulya Bhanu, A.Jyothi, D.Tejaswini, Dr.A.Srikrishna, "Image Enhancement Methods for old manuscripts with the damaged Background", International Conference on Recent Advances in Computer Sciences, 2012, pp: 917-919.</li>
              <li>A.Vamsi Krishna, Ch. Pavan Tej, Dr. A. Sri Krishna and Dr. B.Raveendra Babu,(2010), "Morphological Background Detection and enhancement of Color Images with Poor Lighting",International conference on Advances in computer Science ACS 2010 held on Dec 20-23, Trivandrum. DOI: 02.ACS.2010.01.49</li>
              <li>M.Pompapathi, Dr.A.Srikrishna and Dr.B.Raveendra Babu, (2010), "An Efficient Approach for Removal of Impulse noise from Highly Corrupted Images by Preserving Edge Details", IEEE Sponsored International conference on Signal and Image Processing, ICSIP-2010 held on Dec 15-17, Chennai, DOI:10.1109/ICSIP.2010.5697526, pp:498-501, Pages 498-501<b>(SCOPUS Indexed)</b></li>
              <li>A.Srikrishna, "A Comparison on Morphological Skeleton Transform With Mutiple structuring Elements", Interanational Conference ICORG 2006 held from 6th to 8th June 2006 at NIRD Campus, Hyderabad.</li>
              <li>A.Srikrishna, "Decomposition of Morphological Templates Using Innovative Techniques", Proceeding of National Conference on Emerging trends in Software Engineering and Information Technology, RGMIT, A.P.pp.152-159., Feb., 2004.</li>
            </ol>
          </div>
          <script>
            document.getElementById('conferencesCount').innerText = [...document.getElementById('conferencesList').getElementsByTagName('li')].length;
            document.getElementById('totalPapersCount').innerText = parseInt(document.getElementById('conferencesCount').innerText) + parseInt(document.getElementById('journalsCount').innerText);
            document.getElementById('journalsCount').innerText = [...document.getElementById('journalsList').getElementsByTagName('li')].length;
          </script>
          <div class="content-block">
            <h5>Faculty as Resource persons</h5>
            <ul>
              <li>Dr. A.Srikrishna, Professor acted as Resource Persons at AICTE sponsored two week FDP on 'Digital Image Processing for Medical Images' conducted by SRKR Engineering College, Bhimavaram, on 6<sup>th</sup> August, 2019. In this FDP, Dr. A.Srikrishna handled seminars on 'Morphological Image Processing', and 'Shape Representation techniques using Mathematical Morphology'</li>
            </ul>
          </div>
          <div class="content-block">
            <h5>Subjects Taught</h5>
            <ul id="subjectList">
              <li>Problem Solving with C</li>
              <li>Digital Logic Design</li>
              <li>Computer Organization</li>
              <li>Data Structures</li>
              <li>Design and Analysis of Algorithms</li>
              <li>Digital Image Processing</li>
              <li>System Software</li>
              <li>Interactive Computer Graphics</li>
              <li>Parallel Computing</li>
              <li>Microprocessors &amp; Interfacing</li>
              <li>Embedded Systems</li>
              <li>Computer Networks</li>
              <li>Computer Vision</li>
              <li>Automata Theory and Formal Languages</li>
            </ul>
          </div>
          <div class="content-block">
            <h5>Books Published</h5>
            <ol>
              <li>Dr.M.Pompapathi, <b>Dr.A.Srikrishna</b>, Dr.B.Eswara Reddy, authored a book entitled "Nonlinear EdgeDetectors for Noisy Images", published by LAP LAMBERT Academic Publishing, 2019, ISBN - 978-620-0-07826-1</li>
              <li><b>Dr.A.Srikrishna</b>, Dr.M.Pompapthi, Sri G.Srinivasa Rao authored a book entitled "Parametric Based Morphological Transformation for Contrast Enhancement" published by LAP Lambert Academic Publishing. ISBN - 978-620-2-01347-5</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include './includes/footer.php' ?>