-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 05:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`) VALUES
(1, 'Ranjeet Shrestha', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(255) UNSIGNED NOT NULL,
  `disease_name` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `symptoms` longtext NOT NULL,
  `diagnosis` longtext NOT NULL,
  `triggers` longtext NOT NULL,
  `prevention` longtext NOT NULL,
  `tratment` longtext NOT NULL,
  `medicines` longtext NOT NULL,
  `extra_title` longtext NOT NULL,
  `extra_description` longtext NOT NULL,
  `image_name` varchar(1000) NOT NULL,
  `post_date` datetime(6) NOT NULL,
  `author_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`, `description`, `symptoms`, `diagnosis`, `triggers`, `prevention`, `tratment`, `medicines`, `extra_title`, `extra_description`, `image_name`, `post_date`, `author_name`) VALUES
(41, 'Asthma', 'Asthma is a condition in which your airways narrow and swell and produce extra mucus. This can make breathing difficult and trigger coughing, wheezing and shortness of breath.<br><br>\r\n\r\nFor some people, asthma is a minor nuisance. For others, it can be a major problem that interferes with daily activities and may lead to a life-threatening asthma attack.<br><br>\r\n\r\nAsthma can\'t be cured, but its symptoms can be controlled. Because asthma often changes over time, it\'s important that you work with your doctor to track your signs and symptoms and adjust treatment as needed.', '1. fatigue  <br>\r\n2. Chest tightness or pain<br>\r\n3. anxiousness or panic  <br>\r\n4. Shortness of breath  <br>\r\n5. A whistling or wheezing sound when exhaling (wheezing is a common sign of asthma in children)  <br>\r\n6. Trouble sleeping caused by shortness of breath, coughing or wheezing  <br>\r\n7. Shortness of breath  <br>', 'There is no single test or exam that will determine if you or your child has asthma. Instead, your doctor will use a variety of criteria to determine if the symptoms are the result of asthma. The following can help diagnose asthma:-<br>\r\n\r\n1. <b>Health history. </b>If you have family members with the breathing disorder, your risk is higher. Alert your doctor to this genetic connection.<br>\r\n2. <b>Physical exam. </b>Your doctor will listen to your breathing with a stethoscope. You may also be given a skin test to look for signs of an allergic reaction, such as hives or eczema. Allergies increase your risk for asthma.<br>\r\n3. <b>Breathing tests.</b> Pulmonary function tests (PFTs) measure airflow into and out of your lungs. For the most common test, <br>spirometry, you blow into a device that measures the speed of the air.<br>\r\nYou could be having a serious allergic reaction and may need immediate treatment in hospital.<br>\r\n\r\n', 'Certain conditions and environments may also trigger symptoms of asthma. The list of possible causes and triggers is extensive. Triggers include:<br><br>\r\n\r\n1. <b>Illness.</b> Respiratory illnesses such as viruses, pneumonia, and the flu can trigger asthma attacks.<br>\r\n2. <b>Exercise.</b> Increased movement may make breathing more difficult.<br>\r\n3. <b>Irritants in the air.</b> People with asthma may be sensitive to irritants, such as chemical fumes, strong odors, and smoke.<br>\r\n4. <b>Allergens.</b> Animal dander, dust mites, and pollen are just a few examples of allergens that can trigger symptoms.<br>\r\n5. <b>Extreme weather conditions.</b> Conditions such as very high humidity or low temperatures may trigger asthma.<br>\r\n6. <b>Emotions.</b> Shouting, laughing, and crying may trigger an attack.<br>', 'Because researchers have yet to identify the exact cause of asthma, it is challenging to know how to prevent the inflammatory condition.<br><br>\r\n\r\nHowever, more information is known about preventing asthma attacks. These strategies include:<br>\r\n\r\n1. <b>Avoiding triggers. </b>Steer clear of chemicals, smells, or products that have caused breathing problems in the past.<br>\r\n\r\n2. <b>Reducing exposure to allergens. </b>If you have identified allergens, such as dust or mold, that trigger an asthma attack, avoid them as best you can.<br>\r\n\r\n3. <b>Getting allergy shots. </b>Allergen immunotherapy is a type of treatment that may help alter your immune system. With routine shots, your body may become less sensitive to any triggers you encounter..<br>\r\n\r\n4. <b>Taking preventive medication. </b>Your doctor may prescribe medication for you to take on a daily basis. This medication may be used in addition to the one you use in case of an emergency.<br>\r\n\r\n5. <b>increased heart rate.</b>', '<b>Treatments for asthma fall into three primary categories:</b><br><br>\r\n\r\n<b>breathing exercises</b><br>\r\nThese exercises can help you get more air into and out of your lungs. Over time, this may help increase lung capacity and cut down on severe asthma symptoms. Your doctor or an occupational therapist can help you learn these breathing exercises for asthma.<br>\r\n\r\n<b>quick-acting treatments.</b><br>\r\nIf you think that someone you know is having an asthma attack, tell them to sit them upright and assist them in using their rescue inhaler or nebulizer. Two to six puffs of medication should help ease their symptoms.<br>\r\n<br>\r\nIf symptoms persist for more than 20 minutes, and a second round of medication doesn\'t help, seek emergency medical attention.<br><br>\r\n\r\nIf you frequently need to use quick-relief medications, you should ask your doctor about another type of medication for long-term asthma control.\r\n<br>\r\n<b>long-term asthma control medications.</b><br>\r\nThese medications, taken daily, help reduce the number and severity of your asthma symptoms, but they don\'t manage the immediate symptoms of an attack.<br>\r\n\r\n<b>Long-term asthma control medications include the following:</b><br><br>\r\n\r\na. Anti-inflammatories. Taken with an inhaler, corticosteroids and other anti-inflammatory medications help reduce swelling and mucus production in your airwaves, making it easier to breathe.<br><br>\r\nb. Anticholinergics. These help stop your muscles from tightening around your airwaves. There usually taken daily in combination with anti-inflammatories.<br><br>\r\nc. Long-acting bronchodilators. These should only be used in combination with anti-inflammatory asthma medications.\r\nBiologic therapy drugs. These new, injectable medications may help people with severe asthma.<br>', '<b>Some quick-relief asthma medicines include:</b>\r\n<br>\r\n\r\nAlbuterol (ProAir HFA, Proventil HFA, Ventolin HFA)<br>\r\nLevalbuterol (Xopenex HFA).<br>\r\nMetaproterenol.<br>\r\nTerbutaline<br>\r\n<b>\r\nQuick-relief asthma medicines may cause these side effects:</b><br>\r\n1. Anxiety.<br>\r\n2. Tremor (your hand or another part of your body may shake).<br>\r\n3. Restlessness.<br>\r\n4. Headache.<br>\r\n5. Fast and irregular heartbeats. Call your doctor right away if you have this side effect..<br>', 'Exacerbations.', 'When your asthma symptoms get progressively worse, it is known as an exacerbation, or an asthma attack. It becomes increasingly difficult to breathe because your airways are swollen and your bronchial tubes have narrowed.<br><br>\r\n\r\nThe symptoms of an exacerbation may include:<br>\r\n\r\n1.hyperventilation.<br>\r\n2.cough.<br>\r\n3.wheezing.<br>\r\n4.shortness of breath.<br>\r\n5.increased heart rate.<br>\r\n6.agitation.<br>', 'aaaa.png', '0000-00-00 00:00:00.000000', 'Ranjeet Shrestha'),
(42, 'Blood Cancer (Leukemia)', 'Blood cancer is also known as LEUKEMIA.<br>\r\nLeukemia is a cancer of the blood or bone marrow. Bone marrow produces blood cells. Leukemia can develop due to a problem with blood cell production. It usually affects the leukocytes, or white blood cells (WCB).\r\nAcute leukemia develops quickly and worsens rapidly, but chronic leukemia gets worse over time. There are several different types of leukemia, and the best course of treatment and a personâ€™s chance of survival depends on which type they have.<br><br>\r\n\r\nWBCs are a vital part of your immune system. They protect your body from invasion by bacteria, viruses, and fungi, as well as from abnormal cells and other foreign substances. In leukemia, the WBCs doesn\'t function like normal WBCs. They can also divide too quickly and eventually crowd out normal cells.<br><br>\r\n\r\nLeukemia is most likely to affect people over the age of 55 years, but it is also the most common cancer in those aged under 15 years. The National Cancer Institute estimates that 61,780 people will receive diagnosis of leukemia in 2019. They also predict that leukemia will cause 22,840 deaths in the same year.', 'The symptoms of leukemia include:<br><br>\r\n\r\n1. excessive sweating, especially at night .<br>\r\n2. fatigue and weakness that donot go away with rest<br>\r\n3. unintentional weight loss<br>\r\n4. bone pain and tenderness<br>\r\n5. painless, swollen lymph nodes (especially in the neck and armpits)<br>\r\n6. enlargement of the liver or spleen<br>\r\n7. red spots on the skin, called petechiae<br>\r\n8. fever or chills<br>\r\n9. frequent infections<br><br>\r\nHowever, all these can all be symptoms of other illnesses. Consultation and testing are necessary to confirm a diagnosis of leukemia.', 'Leukemia may be suspected if you have certain risk factors or concerning symptoms. Your doctor will begin with a complete history and physical examination, but leukemia canâ€™t be fully diagnosed by a physical exam. Instead, doctors will use blood tests, biopsies, and imaging tests to make a diagnosis.<br><br>\r\n\r\n<b>Tests</b><br><br>\r\nThere are a number of different tests that can be used to diagnose leukemia. A complete blood count determines the numbers of RBCs, WBCs, and platelets in the blood. Looking at your blood under a microscope can also determine if the cells have an abnormal appearance. Tissue biopsiescan be taken from the bone marrow or lymph nodes to look for evidence of leukemia. These small samples can identify the type of leukemia and its growth rate. Biopsies of other organs such as the liver and spleen can show if the cancer has spread.', 'The causes of leukemia aren\'t known. However, several factors have been identified which may increase your risk. These include:<br><br>\r\n\r\n1. a family history of leukemia<br>\r\n2. smoking, which increases your risk of developing acute myeloid leukemia (AML)<br>\r\n3. genetic disorders such as Down syndrome<br>\r\n4. blood disorders, such as myelodysplastic syndrome, which is sometimes called â€œpreleukemiaâ€<br>\r\n5. previous treatment for cancer with chemotherapy or radiation<br>\r\n6. exposure to high levels of radiation<br>\r\n7. exposure to chemicals such as benzene<br>', '', 'Leukemia is usually treated by a hematologist-oncologist. These are doctors who specialize in blood disorders and cancer. The treatment depends on the type and stage of the cancer. Some forms of leukemia grow slowly and donâ€™t need immediate treatment. However, treatment for leukemia usually involves one or more of the following:<br><br>\r\n\r\n1.<b> Chemotherapy </b>uses drugs to kill leukemia cells. Depending on the type of leukemia, you may take either a single drug or a combination of different drugs.\r\n2. <b>Radiation therapy</b> uses high-energy radiation to damage leukemia cells and inhibit their growth. Radiation can be applied to a specific area or to your entire body.\r\n3.<b> Stem cell transplantation,</b> replaces diseased bone marrow with healthy bone marrow, either your own (called autologous transplantation) or from a donor (called allologous transplantation). This procedure is also called a bone marrow transplant.\r\n4. <b>Biological or immune therapy</b> uses treatments that help your immune system recognize and attack cancer cells.\r\n5. <b>Targeted therapy</b> uses medications that take advantage of vulnerabilities in cancer cells. For example, imatinib (Gleevec) is a targeted drug that\'s commonly used against CML.', 'Some quick-relief asthma medicines include:<br><br>\r\n\r\n1. Midamar* Aldactone* Dyrenium* Lasix* Bumex*<br>\r\n2. tenormin 50 mg<br>\r\n3. Hygroton* Diuril* Esidrix*, Hydrodiuril*, Microzide* Lozol* Mykrox*, Zaroxolyn*<br>\r\n4. Sectral*, Tenormin*, Kerlone*, Zebeta*, Cartrol*, Lopressor*, Toprol-XL*, Corgard*, Levatol*, Visken*, Inderal*, Betapace*, Blocadren*<br>', 'Types of leukemia', 'The onset of leukemia can be acute (sudden onset) or chronic (slow onset). In acute leukemia, cancer cells multiply quickly. In chronic leukemia, the disease progresses slowly and early symptoms may be very mild. Leukemia is also classified according to the type of cell. Leukemia involving myeloid cells is called myelogenous leukemia. Myeloid cells are immature blood cells thatâ€™d normally become granulocytes or monocytes. Leukemia involving lymphocytes is called lymphocytic leukemia. There are four main types of leukemia:<br><br>\r\n\r\n<b>Acute myelogenous leukemia (AML)</b><br>\r\nAcute myelogenous leukemia (AML) can occur in children and adults. According to the Surveillance, Epidemiology, and End Results Program of the National Cancer Institute (NCI), about 21,000 new cases of AML are diagnosed annually in the United States. This is the most common form of leukemia. The five-year survival rate for AML is 26.9 percent.<br>\r\n\r\n<b>Acute lymphocytic leukemia (ALL)</b><br>\r\nAcute lymphocytic leukemia (ALL) occurs mostly in children. The NCI estimates about 6,000 new cases of ALL are diagnosed annually. The five-year survival rate for ALL is 68.2 percent.<br>\r\n\r\n<b>Chronic myelogenous leukemia (CML)</b><br>\r\nChronic myelogenous leukemia (CML) affects mostly adults. About 9,000 new cases of CML are diagnosed annually, according to the NCI. The five-year survival rate for CML is 66.9 percent.<br>\r\n\r\n<b>Chronic lymphocytic leukemia (CLL)</b><br>\r\nChronic lymphocytic leukemia (CLL) is most likely to affect people over the age of 55. Itâ€™s very rarely seen in children. According to the NCI, about 20,000 new cases of CLL are diagnosed annually. The five-year survival rate for CLL is 83.2 percent. Hairy cell leukemia is a very rare subtype of CLL. Its name comes from the appearance of the cancerous lymphocytes under a microscope.', 'leukemia2.jpg', '0000-00-00 00:00:00.000000', 'Ranjeet Shrestha'),
(45, 'Common cold', 'The common cold is a viral infectious disease that infects the upper respiratory system. It is also known as acute viral rhinopharyngitis and acute coryza. It is the most common infectious disease in humans and is mainly caused by coronaviruses or rhinoviruses.', 'Cold symptoms come on gradually and can include:<br><br>\r\n\r\n1. a blocked or runny nose<br>\r\n2. a sore throat<br>\r\n3. headaches<br>\r\n4. muscle aches<br>\r\n5. coughs<br>\r\n6. sneezing<br>\r\n7. a raised temperature<br>\r\n8. pressure in your ears and face<br>\r\n9. loss of taste and smell<br><br>\r\nThe symptoms are the same in adults and children. Sometimes symptoms last longer in children.', 'Most people with a common cold can be diagnosed by their signs and symptoms. If your doctor suspects you have a bacterial infection or other condition, he or she may order a chest X-ray or other tests to exclude other causes of your symptoms.', '\"The common cold can be caused by more than 200 different viruses. Around 50 percent of colds are caused by rhinoviruses, other cold-causing viruses include:<br><br>\r\n\r\n1. human parainfluenza virus<br>\r\n2. Human metapneumovirus<br>\r\n3. coronaviruses adenovirus<br>\r\n4. human respiratory syncytial virus<br>\r\n5. enteroviruses<br>\r\nWhen a virus manages to overpower the bodyâ€™s immune system, infection occurs. The first line of defense is mucus, which is produced in the nose and throat by the mucus glands. This mucus traps anything inhaled, such as dust, viruses, and bacteria. Mucus is a slippery fluid that the membranes of the nose, mouth, throat, and vagina produce.<br><br>\r\n\r\nWhen the mucus is penetrated by the virus, the virus then enters a cell, the virus takes control and uses the cellâ€™s machinery to manufacture more viruses, and these viruses then attack surrounding cells', '', 'To make yourself as comfortable as possible when you have a cold, try:<br><br>\r\n\r\n1. Drinking plenty of fluids. Water, juice, clear broth, or warm lemon water are good choices. Avoid caffeine and alcohol, which can dehydrate you.<br>\r\n2. Eating chicken soup. Chicken soup and other warm fluids can be soothing and can loosen congestion.<br>\r\n3. Resting. If possible, stay home from work or school if you have a fever or a bad cough or are drowsy after taking medications. This will give you a chance to rest as well as reduce the chances that you\'ll infect others.<br>\r\n4. Adjusting your room\'s temperature and humidity. Keep your room warm, but not overheated. If the air is dry, a cool-mist humidifier or vaporizer can moisten the air and help ease congestion and coughing. Keep the humidifier clean to prevent the growth of bacteria and molds.<br>\r\n5. Soothing your throat. A saltwater gargle â€” 1/4 to 1/2 teaspoon salt dissolved in a 4-ounce to 8-ounce glass of warm water â€” can temporarily relieve a sore or scratchy throat.<br>\r\n6. Stress. Using saline nasal drops. To help relieve nasal congestion, try saline nasal drops. You can buy these drops over-the-counter, and they can help relieve symptoms, even in children.<br><br>\r\nIn infants, gently suction the nostrils with a bulb syringe (insert the bulb syringe about 1/4 to 1/2 inch, or about 6 to 12 millimeters) after applying saline drops.', 'Note* GPs do not recommend antibiotics for colds because they will not relieve your symptoms or speed up your recovery. Antibiotics are only effective against bacterial infections, and colds are caused by viruses.<br><br>\r\n\r\na. Midamar* Aldactone* Dyrenium* Lasix* Bumex*<br>\r\nb. tenormin 50 mg<br>\r\nc. Hygroton* Diuril* Esidrix*, Hydrodiuril*, Microzide* Lozol* Mykrox*, Zaroxolyn*<br>\r\nd. Sectral*, Tenormin*, Kerlone*, Zebeta*, Cartrol*, Lopressor*, Toprol-XL*, Corgard*, Levatol*, Visken*, Inderal*, Betapace*,  Blocadren*', 'f', 'a', 'cc1.jpg', '0000-00-00 00:00:00.000000', 'Ranjeet Shrestha');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialist`, `address`, `photo`) VALUES
(2, 'Ranjit Shrestha', 'Orthopedic', 'kathmandu, Nepal', '1625920238-ran.jpg'),
(3, 'Shikhar Paudel', 'gynecologist', 'Arghakhanchhi', '1625920304-ww.jpg'),
(4, 'Roman Kc', 'gynecologist', 'Butwal, Nepal', '1625920351-img_1.jpg'),
(5, 'Bipin Gc', 'Cardiologists', 'Butwal, Nepal', '1625920489-img_3.jpg'),
(6, 'sdfasfd', 'khkhkhkhk', 'hrjfjff', '1625922039-corona-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_name` varchar(255) NOT NULL,
  `m_contact` varchar(255) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_name`, `m_contact`, `m_email`, `m_message`) VALUES
('sdf', 'asdf', 'shresthachang2014@gmail.com', 'fasdf'),
('ranjeet', '9843716636', 'shresthachang2014@gmail.com', 'hello i am ranjit shrestha ho'),
('Roman Kc', '123456789', 'romankc1234@gmial.com', 'hello i am roman kc....'),
('bipin gc', '987651421712', 'bipingc292@gmail.com', 'hello i am bipin... '),
('shikhar paudel', '98765142188', 'shikhar@gmail.com', 'hey all this is shikhar herer!!'),
('Ranjeet Shrestha', '9843362373', 'shrestharanjit2014@gmail.com', 'this is Ranjit Shrestha, good afternoon to everyone '),
('adfds', 'sdfas', 'shresthachang2014@gmail.com', 'sdadfd');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `descreption` varchar(10000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `descreption`, `image`) VALUES
(5, 'Magnetic body after covid second dose in nepal..', 'Drinking plenty of fluids. Water, juice, clear broth, or warm lemon water are good choices. Avoid caffeine and alcohol, which can dehydrate you.\r\n2. Eating chicken soup. Chicken soup and other warm fluids can be soothing and can loosen congestion.\r\n3. Resting. If possible, stay home from work or school if you have a fever or a bad cough or are drowsy after taking medications. This will give you a chance to rest as well as reduce the chances that you\'ll infect others.\r\n4. Adjusting your room\'s temperature and humidity. Keep your room warm, but not overheated. If the air is dry, a cool-mist humidifier or vaporizer can moisten the air and help ease congestion and coughing. Keep the humidifier clean to prevent the growth of bacteria and molds.\r\n5. Soothing your throat. A saltwater gargle â€” 1/4 to 1/2 teaspoon salt dissolved in a 4-ounce to 8-ounce glass of warm water â€” can temporarily relieve a sore or scratchy throat.', '1625927445-covid-help.jpg'),
(6, 'With 1,353 new cases, Nepal’s Covid-19 tally reaches 654,212 ', 'The Health Ministry reports 22 new deaths including figures from the past few days based on statistics from the Nepal Army.\r\n\r\nNepal on Saturday reported 1,353 new coronavirus cases in the last 24 hours taking the nationwide infection tally to 654,212.\r\n\r\nSimilarly, 816 people tested positive in a total of 3,887 antigen tests, according to the Health Ministry.\r\n\r\nAs of Saturday, 3,409,940 PCR and 231,094 antigen tests have been carried out across the country.\r\n\r\nA total of 6,530 PCR tests were performed in the past 24 hours, according to the Health Ministry.\r\n\r\nIn its regulars\r\n\r\n', '1625974917-thumb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
