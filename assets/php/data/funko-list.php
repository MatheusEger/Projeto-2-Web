<?php 
include_once("./assets/php/classes/category.php");
include_once("./assets/php/classes/funko.php");

$category1 = new Category(
    'Stranger Things',
    'eleven-st.png',
    'Conheça os funkos da série'
);
$category2 = new Category(
    'Harry Potter',
    'harry-hp.png',
    'Conheça os funkos da saga'
);
$category3 = new Category(
    'Marvel',
    'prince-yan.png',
    'Conheça os funkos da marca'
);
$category4 = new Category(
    'DC Comics',
    'harley-dc.png',
    'Conheça os funkos da marca'
);
$category5 = new Category(
    'Disney',
    'jack-disney.png',
    'Conheça os funkos da marca'
);


/*stranger things*/
$stranger1 = new Funko(
    1,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwdb2c1378/images/funko/upload/72135a_StrangerThings_FinaleEleven_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Eleven in Floral Shirt', 
    '', 
    '80,00', 
    $category1->getName()
);
$stranger2 = new Funko(
    2,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw8337b182/images/funko/upload/72139_StrangerThings_S4_W3_HunterNancy_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Nancy with Shotgun', 
    '', 
    '150,00', 
    $category1->getName()
);
$stranger3 = new Funko(
    3,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw7f550f07/images/funko/upload/72137_StrangerThings_HunterDustinWShield_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Dustin with Spear and Shield', 
    '', 
    '200,00', 
    $category1->getName()
);
$stranger4 = new Funko(
    4,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw10df7b01/images/funko/65639-1.png?sw=800&sh=800', 'Eleven with Diorama', 
    '', 
    '100,00', 
    $category1->getName()
);
$stranger5 = new Funko(
    5,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwbdfc775e/images/funko/62391-1.png?sw=800&sh=800',
    'Eleven in Tank Suit', 
    '', 
    '110,00', 
    $category1->getName()
);
$stranger6 = new Funko(
    6,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw781645d3/images/funko/62398-1.png?sw=800&sh=800',
    'Steve', 
    '', 
    '200,00',
    $category1->getName()
);
$stranger7 = new Funko(
    7,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw7846815e/images/funko/62388-1.png?sw=800&sh=800', 'Eleven', 
    '', 
    '170,00', 
    $category1->getName()
);
$stranger8 = new Funko(
    8,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw851feea2/images/funko/62393-1.png?sw=800&sh=800', 'Mike', 
    '', 
    '190,00', 
    $category1->getName()
);
$stranger9 = new Funko(
    9,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwb7090e3a/images/funko/upload/72138_StrangerThings_S4_W3_EddieWithGuitar_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Eddie with Guitar', 
    '', 
    '340,00', 
    $category1->getName()
);

/*harry potter*/
$hp1 = new Funko(
    10,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwf419b277/images/funko/57360-1.png?sw=800&sh=800', 'Harry Potter Pushing Trolley', 
    '', 
    '400,00', 
    $category2->getName()
);
$hp2 = new Funko(
    11,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw6e2aeec6/images/funko/70254-1.png?sw=800&sh=800', "Moment Hagrid's Hut", 
    '', 
    '599,00', 
    $category2->getName()
);
$hp3 = new Funko(
    12,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwa0f55b74/images/funko/65649-1.png?sw=800&sh=800', 'Madam Rosmerta with The Three Broomsticks', 
    '', 
    '320,00', 
    $category2->getName()
);
$hp4 = new Funko(
    13,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw5e657876/images/funko/65647-1.png?sw=800&sh=800', 'Neville LongBottom with Honeydukes', 
    '', 
    '70,00', 
    $category2->getName()
);
$hp5 = new Funko(
    14,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwb57047fd/images/funko/65652-1.png?sw=800&sh=800', 'Harry Potter with Potion Bottle', 
    '', 
    '100,00', 
    $category2->getName()
);
$hp6 = new Funko(
    15,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw959dd005/images/funko/57369-1.png?sw=800&sh=800', 'Town Albus Dumbledore with Hogwarts', 
    '', 
    '350,00', 
    $category2->getName()
);
$hp7 = new Funko(
    16,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw441af08a/images/funko/51155-1.png?sw=800&sh=800', 'Holiday Albus Dumbledore', 
    '', 
    '90,00', 
    $category2->getName()
);
$hp8 = new Funko(
    17,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwe5e0d154/images/funko/51154-1.png?sw=800&sh=800', 'Holiday Ron Weasley', 
    '', 
    '109,00', 
    $category2->getName()
);
$hp9 = new Funko(
    18,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwd067f71b/images/funko/6570-1.png?sw=800&sh=800', 'Sirius Black', 
    '', 
    '95,00', 
    $category2->getName()
);
$hp10 = new Funko(
    19,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw2e067d22/images/funko/6560-1.png?sw=800&sh=800', 'Triwizard Harry Potter', 
    '', 
    '89,90', 
    $category2->getName()
);
$hp11 = new Funko( 
    20,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw947c0bf0/images/funko/6572-1.png?sw=800&sh=800', 'Luna Lovegood', 
    '', 
    '100,00', 
    $category2->getName()
);
$hp12 = new Funko( 
    21,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw32d322e3/images/funko/5891-1.png?sw=800&sh=800', 'Albus Dumbledore with Wand', 
    '', 
    '110,00', 
    $category2->getName()
);
$hp13 = new Funko( 
    22,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw254415ea/images/funko/5859-1.png?sw=800&sh=800', 'Ron Weasley', 
    '', 
    '89,90', 
    $category2->getName()
);
$hp14 = new Funko( 
    23,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw9f8c4864/images/funko/5858-1.png?sw=800&sh=800', 'Harry Potter', 
    '', 
    '89,90', 
    $category2->getName()
);
$hp15 = new Funko( 
    24,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw91382134/images/funko/5862-1.png?sw=800&sh=800', 'Severus Snape', 
    '', 
    '100,00', 
    $category2->getName()
);
$hp16 = new Funko( 
    25,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw750adc61/images/funko/10984-PX-1K1-1.png?sw=800&sh=800', 
    'Bellatrix Lestrange', 
    '', 
    '120,00', 
    $category2->getName()
);
$hp17 = new Funko( 
    26,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwc069d463/images/funko/10988-PX-1K1-1.png?sw=800&sh=800', 
    'Harry Potter with Prophecy', 
    '', 
    '150,00', 
    $category2->getName()
);

/*marvel*/
$marvel1 = new Funko( 
    27,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw59aa981a/images/funko/upload/69236_POPVinyl_Marvels_POP9_Render_GLAM-1-WEB.png?sw=800&sh=800', 
    'Prince Yan', 
    '', 
    '70,00', 
    $category3->getName()
);

$marvel2 = new Funko( 
    28,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw811c8c35/images/funko/upload/72187_POPMarvel_Holiday_DeadpoolSweater_GLAM-WEB.png?sw=800&sh=800', 
    'Holiday DeadPool in Ugly Sweater', 
    '', 
    '120,00', 
    $category3->getName()
);

$marvel3 = new Funko( 
    29,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw59e41a66/images/funko/upload/73955_POP_Marvel_GwenStacy_GLAM-WEB.png?sw=800&sh=800', 
    'Gwen Stacy with Bag', 
    '', 
    '150,00', 
    $category3->getName()
);

$marvel4 = new Funko( 
    30,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw8a971ee6/images/funko/upload/70097_POPMarvel_CWBAS_SpiderMan_GLAM-WEB.png?sw=800&sh=800', 
    'Civil War: Spider-Man', 
    '', 
    '115,00', 
    $category3->getName()
);

$marvel5 = new Funko( 
    31,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw10820936/images/funko/64808-1.png?sw=800&sh=800', 
    'Mighty Thor (Glow)', 
    '', 
    '170,00', 
    $category3->getName()
);

$marvel6 = new Funko( 
    32,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw7ae43e8b/images/funko/upload/72190_POPMarvel_Holiday_SpiderManSweater_GLAM-WEB.png?sw=800&sh=800', 
    'Holiday Spider-Man in Ugly Sweater', 
    '', 
    '89,90', 
    $category3->getName()
);

$marvel7 = new Funko( 
    33,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw07e8e14c/images/funko/59568-1.png?sw=800&sh=800', 
    'Aisha', 
    '', 
    '112,00', 
    $category3->getName()
);

$marvel8 = new Funko( 
    34,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw95b3460d/images/funko/52044-1.png?sw=800&sh=800', 
    'Halloween Wanda', 
    '', 
    '120,00', 
    $category3->getName()
);

/*dc*/
$dc1 = new Funko( 
    35,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw8511aff5/images/funko/65592-1.png?sw=800&sh=800', 
    'The Flash', 
    '', 
    '140,00', 
    $category4->getName()
);

$dc2 = new Funko( 
    36,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw5c03ca1f/images/funko/upload/65603a_TheFlash_Batwing_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Rides Super Deluxe Batman in Batwing', 
    '', 
    '200,00', 
    $category4->getName()
);

$dc3 = new Funko( 
    37,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw012bd88e/images/funko/66906-1.png?sw=800&sh=800', 
    'Batman (Hush)', 
    '', 
    '89,90', 
    $category4->getName()
);

$dc4 = new Funko( 
    38,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwca53d01c/images/funko/66318-1.png?sw=800&sh=800', 
    'Harley Quinn with Cards', 
    '', 
    '120,00', 
    $category4->getName()
);

$dc5 = new Funko( 
    39,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw46e17fac/images/funko/66615-1.png?sw=800&sh=800', 
    'Batman', 
    '', 
    '150,00', 
    $category4->getName()
);

$dc6 = new Funko( 
    40,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw9e9063cc/images/funko/66759-1.png?sw=800&sh=800', 
    'Lights and Sounds The Flash', 
    '', 
    '210,00', 
    $category4->getName()
);

$dc7 = new Funko( 
    41,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw73b59569/images/funko/12545-PX-1RE-1.png?sw=800&sh=800', 
    'Wonder Woman with Sword', 
    '', 
    '250,00', 
    $category4->getName()
);

$dc8 = new Funko( 
    42,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwef747fbc/images/funko/11496-PX-1MA-1.png?sw=800&sh=800', 
    'Classic Batman', 
    '', 
    '130,00', 
    $category4->getName()
);

$dc9 = new Funko( 
    43,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwff50e1a4/images/funko/8401-1.png?sw=800&sh=800', 
    'Harley Quinn', 
    '', 
    '80,00', 
    $category4->getName()
);

$dc10 = new Funko( 
    44,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwfea1f374/images/funko/54988-1.png?sw=800&sh=800', 
    'Wonder Woman White Lantern', 
    '', 
    '145,00', 
    $category4->getName()
);

/*disney*/
$disney1 = new Funko( 
    45,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw8b137348/images/funko/upload/74711-POP-Disney-TNBC---Headless-Jack_GLAM-WEB.png?sw=800&sh=800', 
    'Headless Jack Skellington', 
    '', 
    '110,00', 
    $category5->getName()
);

$disney2 = new Funko( 
    46,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw07851f4c/images/funko/upload/72303_POP_Disney_HocusPocus2_MarySmokeRings_GLAM-WEB.png?sw=800&sh=800', 
    'Mary Sanderson', 
    '', 
    '190,00', 
    $category5->getName()
);

$disney3 = new Funko( 
    47,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw13d36c8b/images/funko/upload/72305_Disney_HocusPocus2_WinifredSmoke_GLAM-WEB.png?sw=800&sh=800', 
    'Winifred Sanderson', 
    '', 
    '190,00', 
    $category5->getName()
);

$disney4 = new Funko( 
    48,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw93e4a955/images/funko/upload/72304_POP_Disney_HocusPocus2_SarahSmoke_GLAM-WEB.png?sw=800&sh=800', 
    'Sarah Sanderson', 
    '', 
    '190,00', 
    $category5->getName()
);

$disney5 = new Funko( 
    49,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw65ead07a/images/funko/upload/72383_DIS_TNBC_30th_ChristmasSally_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Christmas Sally', 
    '', 
    '90,00', 
    $category5->getName()
);

$disney6 = new Funko( 
    50,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwd5225e04/images/funko/upload/72387_POP_Disney_TNBC_30th-_Zero_CandyCane_GLAM-WEB.png?sw=800&sh=800', 
    'Zero with Candy Cane', 
    '', 
    '100,00', 
    $category5->getName()
);

$disney7 = new Funko( 
    51,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwdafc495f/images/funko/upload/67992_POPMovies_HSM_Troy-GLAM-WEB.png?sw=800&sh=800', 
    'Troy', 
    '', 
    '150,00', 
    $category5->getName()
);

$disney8 = new Funko( 
    52,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw9d1a59da/images/funko/upload/67991_POPMovies_HSM_Sharpay_GLAM-WEB.png?sw=800&sh=800', 
    'Sharpay', 
    '', 
    '150,00', 
    $category5->getName()
);

$disney9 = new Funko( 
    53,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw8b56a397/images/funko/upload/67990_POPMovies_HSM_Gabriella_GLAM-WEB.png?sw=800&sh=800', 
    'Gabriella', 
    '', 
    '150,00', 
    $category5->getName()
);

$disney10 = new Funko( 
    54,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw2e05f2c0/images/funko/upload/72312_POP_Disney_TNBC_30th_Jack_w_gravestone_Render_GLAM-WEB.png?sw=800&sh=800', 
    'Jack Skellington in Graveyard', 
    '', 
    '135,00', 
    $category5->getName()
);

$disney11 = new Funko( 
    55,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw31793226/images/funko/upload/72315_TNBC_SallyWithGravestone_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Deluxe Sally with Deadly Nightshade', 
    '', 
    '145,00', 
    $category5->getName()
);

$disney12 = new Funko( 
    56,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw675f56c2/images/funko/upload/72310_POP_Deluxe_TNBC_30th_Jack_w_ChristmasTown_Door_GLAM-WEB.png?sw=800&sh=800', 
    'Deluxe Jack Skellington with Christmas Door', 
    '', 
    '200,00', 
    $category5->getName()
);

$disney13 = new Funko( 
    57,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwe0ace46c/images/funko/upload/72314-POP-Disney-TNBC-30th---Pumpkin-King-w-torch-flames---GLAM-WEB.png?sw=800&sh=800', 
    'Pumpkin King', 
    '', 
    '110,00', 
    $category5->getName()
);

$disney14 = new Funko( 
    58,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwb6965017/images/funko/upload/67995_Disney_Walt_POP_GLAM-WEB.png?sw=800&sh=800', 
    'Walt Disney with Magazine', 
    '', 
    '80,00', 
    $category5->getName()
);

$disney15 = new Funko( 
    59,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw9f3e00d3/images/funko/66312-1.png?sw=800&sh=800', 
    'Super Baymax with Butterfly', 
    '', 
    '115,00', 
    $category5->getName()
);

$disney16 = new Funko( 
    60,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw89459cfb/images/funko/66383-1.png?sw=800&sh=800', 
    'Mickey Mouse and Minnie Mouse 2-pack', 
    '', 
    '250,00', 
    $category5->getName()
);

$disney17 = new Funko( 
    61,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw0df22bf1/images/funko/63961-1.png?sw=800&sh=800', 
    'Mayor (Black Light)', 
    '', 
    '89,00', 
    $category5->getName()
);

$disney18 = new Funko( 
    62,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwd1952c08/images/funko/56594-1.png?sw=800&sh=800', 
    'Merida (Gold) with Pin', 
    '', 
    '140,00', 
    $category5->getName()
);

$disney19 = new Funko( 
    63,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dwd1233eeb/images/funko/56568-1.png?sw=800&sh=800', 
    'Moana (Gold) with Pin', 
    '', 
    '110,00', 
    $category5->getName()
);

$disney20 = new Funko( 
    64,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw92b236ae/images/funko/48180-1.png?sw=800&sh=800', 
    'Sally Sewing', 
    '', 
    '110,00', 
    $category5->getName()
);

$disney21 = new Funko( 
    65,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw3a84ab23/images/funko/48182-1.png?sw=800&sh=800', 
    'Jack Skellington Scary Face', 
    '', 
    '110,00', 
    $category5->getName()
);

$disney22 = new Funko( 
    66,
    'https://funko.com/dw/image/v2/BGTS_PRD/on/demandware.static/-/Sites-funko-master-catalog/default/dw0eeeb550/images/funko/upload/72313_POP_Disney_TNBC_30th_Jack_lab_GLAM-WEB.png?sw=800&sh=800', 
    'Jack Skellington in Laboratory', 
    '', 
    '160,00', 
    $category5->getName()
);

$strangerThings = array($stranger1, $stranger2, $stranger3, $stranger4, $stranger5, $stranger6, $stranger7, $stranger8, $stranger9);
$harryPotter = array($hp1, $hp2, $hp3, $hp4, $hp5, $hp6, $hp7, $hp8, $hp9, $hp10, $hp11, $hp12, $hp13, $hp14, $hp15, $hp16, $hp17);
$marvel = array($marvel1, $marvel2, $marvel3, $marvel4, $marvel5, $marvel6, $marvel7, $marvel8);
$dc = array($dc1, $dc2, $dc3, $dc4, $dc5, $dc6, $dc7, $dc8, $dc9, $dc10);
$disney = array($disney1, $disney2, $disney3, $disney4, $disney5, $disney6, $disney7, $disney8, $disney9, $disney10, $disney11, $disney12, $disney13, $disney14, $disney15, $disney16, $disney17, $disney18, $disney19, $disney20, $disney21, $disney22);

$dataBase = array(
    'db1' => array($category1, $strangerThings),
    'db2' => array($category2, $harryPotter),
    'db3' => array($category3, $marvel),
    'db4' => array($category4, $dc),
    'db5' => array($category5, $disney)
);

?>