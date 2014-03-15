<?php

class MasterBarangSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$barang = [
			// product courtesy of http://rajamotoronline.com/
			// jenis 1=bikers_fashion 2=bolts 3=box 4=electrical 5=cares 6=gear 7=alarm 8=other parts 9=suspension 10=tools 11=tires
			['id_jenis_barang'=>'1','nama_barang' => 'JAS HUJAN JC ASV II KARET','harga_satuan'=>189000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'1','nama_barang' => 'SEPATU BOOT MOTO AP UK.40 HITAM','harga_satuan'=>89000,'stok'=>2,'ket'=>''],
			['id_jenis_barang'=>'1','nama_barang' => 'CELANA MOTOR CROSS PANJANG MOTIF FOX UK.32','harga_satuan'=>250000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'1','nama_barang' => 'CELANA MOTOR CROSS PANJANG MOTIF FOX UK.35','harga_satuan'=>25000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'1','nama_barang' => 'CELANA MOTOR CROSS PANJANG ANAK MOTIF UK.26','harga_satuan'=>230000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'2','nama_barang' => 'BAUT BO JP - 6X30 4PC','harga_satuan'=>4000,'stok'=>70,'ket'=>''],
			['id_jenis_barang'=>'2','nama_barang' => 'BAUT BMK 10X70 KUNING 2ST','harga_satuan'=>9000,'stok'=>20,'ket'=>''],
			['id_jenis_barang'=>'2','nama_barang' => 'BAUT BMK 6X70 KUNING 2ST','harga_satuan'=>8000,'stok'=>59,'ket'=>''],
			['id_jenis_barang'=>'2','nama_barang' => 'BAUT BO JP 5X30 4PC','harga_satuan'=>4000,'stok'=>40,'ket'=>''],
			['id_jenis_barang'=>'2','nama_barang' => 'BAUT CALIPPER BINTANG TABUNG CAL GLPRO, MOTOR CROSS, MEGA PRO','harga_satuan'=>12000,'stok'=>50,'ket'=>''],
			['id_jenis_barang'=>'3','nama_barang' => 'BOX TENGAH, JOK SPRA, KLEM COOL','harga_satuan'=>145000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'3','nama_barang' => 'BOX TENGAH, JOK SUPRA','harga_satuan'=>135000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'3','nama_barang' => 'FRONT RIDER BAG','harga_satuan'=>400000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'3','nama_barang' => 'KLEM BOX BARANG BELAKANG MEGAPRO-NEW HITAM NEOTRCK','harga_satuan'=>160000,'stok'=>6,'ket'=>''],
			['id_jenis_barang'=>'3','nama_barang' => 'KLEM BOX BARANG BELAKANG SCOOPY HITAM NEOTRCK','harga_satuan'=>160000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'4','nama_barang' => 'AKI KERING GS GSHN GTZ-7S-BS MF BAT SAT-F150','harga_satuan'=>225000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'4','nama_barang' => 'BOHLAM REM DOR COLK WR 12V10W T13 NG SIGNL SPRWHITE','harga_satuan'=>39000,'stok'=>6,'ket'=>''],
			['id_jenis_barang'=>'4','nama_barang' => 'BOHLAMP DEPAN DOD BEBEK 12V, 25W K1 STANLEE BLM 3603 GRAND, MIO','harga_satuan'=>8000,'stok'=>20,'ket'=>''],
			['id_jenis_barang'=>'4','nama_barang' => 'BOHLAMP BELAKANG DOB, DOP LED 9007','harga_satuan'=>20000,'stok'=>10,'ket'=>''],
			['id_jenis_barang'=>'4','nama_barang' => 'BOHLAMP BElAKANG HOLOGEN DOH BEBEK 12V, 18W OSRAM UVF K1 P15D-25-1','harga_satuan'=> 13000,'stok'=>20,'ket'=>''],
			['id_jenis_barang'=>'5','nama_barang' => 'OLI MESIN CASTROL PWR1 GOLD 10W40 0.8L','harga_satuan'=>38500,'stok'=>12,'ket'=>''],
			['id_jenis_barang'=>'5','nama_barang' => 'AIR ACCU HITAM','harga_satuan'=>10000,'stok'=>20,'ket'=>''],
			['id_jenis_barang'=>'5','nama_barang' => 'AIR RADIATOR COLANT MASTR PREMIXD 1QUART','harga_satuan'=>19000,'stok'=>12,'ket'=>''],
			['id_jenis_barang'=>'5','nama_barang' => 'ANTI KARAT WD40 KCL 6.5OZ 191ML','harga_satuan'=>36000,'stok'=>10,'ket'=>''],
			['id_jenis_barang'=>'5','nama_barang' => 'ANTI KARAT AHRS MULTI - CARE 150 ML','harga_satuan'=>31000,'stok'=>12,'ket'=>''],
			['id_jenis_barang'=>'6','nama_barang' => 'GEAR BELAKANG TK KLX 46T-428 TK01270','harga_satuan'=>182000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'6','nama_barang' => 'GEAR BELAKANG YAMAHA TK SCRPIO UK.46T-428','harga_satuan'=>166000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'6','nama_barang' => 'GEAR DEPAN YAMAHA TK RXZ UK.16T-428','harga_satuan'=>55000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'6','nama_barang' => 'RANTAI SPEED 428-128 CHROME','harga_satuan'=>85000,'stok'=>2,'ket'=>''],
			['id_jenis_barang'=>'6','nama_barang' => 'RANTAI TK 428 -128L GOLD','harga_satuan'=>145000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'7','nama_barang' => 'KLAKSON KEONG 1-S HITAM HELA HORN TWIN TONE 12V','harga_satuan'=>275000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'7','nama_barang' => 'KLAKSON MODEL STEBL 1-S KPL MHL','harga_satuan'=>135000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'7','nama_barang' => 'ALUMUNIUM AUDIO REMOTE GMC','harga_satuan'=>250000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'7','nama_barang' => 'KLAKSON KEONG - HELLA','harga_satuan'=>220000,'stok'=>8,'ket'=>''],
			['id_jenis_barang'=>'7','nama_barang' => 'KLAKSON BULAT HELA HORN STANDAR HITAM 12V (2PCS)','harga_satuan'=>130000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'8','nama_barang' => 'KANVAS KOPLING KLX DYTONA SET D-DR-PFKVL-K-KLX150','harga_satuan'=>350000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'8','nama_barang' => 'PACKING KNALPOT ATS TIGER','harga_satuan'=>4000,'stok'=>6,'ket'=>''],
			['id_jenis_barang'=>'8','nama_barang' => 'PER KOPLING KLX150 TK00117','harga_satuan'=>120000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'8','nama_barang' => 'CKD AHM COP (Kepala Busi) KHARISMA, HONDA','harga_satuan'=>13000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'8','nama_barang' => 'CKD AHM PIRING DISC BRAKE BELAKANG MEGA PRO-NW/TIGR-EVO','harga_satuan'=>145000,'stok'=>7,'ket'=>''],
			['id_jenis_barang'=>'9','nama_barang' => 'AS SCHOCK UP-SIDE-DOWN TRAIL, SGI-3 ATAS, BAWAH MRH','harga_satuan'=>1950000,'stok'=>7,'ket'=>''],
			['id_jenis_barang'=>'9','nama_barang' => 'MONOSHOCK - RACING','harga_satuan'=>275000,'stok'=>2,'ket'=>''],
			['id_jenis_barang'=>'9','nama_barang' => 'SHOCK ABSORBER JUPITER, Z, F1Z, R YSS HYBRID UKURAN 280','harga_satuan'=>425000,'stok'=>2,'ket'=>''],
			['id_jenis_barang'=>'9','nama_barang' => 'SHOCK ABSORBER MIO MONO YSS PRO-Z SERIES','harga_satuan'=>360000,'stok'=>2,'ket'=>''],
			['id_jenis_barang'=>'9','nama_barang' => 'SHOCK ABSORBER MIO MONO YSS Z-SERIES OE302-300T-03-85 HITAM-MERAH','harga_satuan'=>550000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'9','nama_barang' => 'SHOCK ABSORBER UK.340 HYBRID SCARLT','harga_satuan'=>235000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'10','nama_barang' => 'KUNCI HELM BESAR WARNA KCL TY513A PLAST','harga_satuan'=>35000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'10','nama_barang' => 'COVER JARING JARING SRAP PANAS BESAR GMA','harga_satuan'=>79000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'10','nama_barang' => 'COVER JOK JARING SRAP PANSA MHL MATIC','harga_satuan'=>75000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'10','nama_barang' => 'COVER JPK JARING SERAP PANAS BESAR MHL','harga_satuan'=>90000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'10','nama_barang' => 'GANTUNGAN KUNCI DOMPET INDIAN KULIT','harga_satuan'=>17000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'11','nama_barang' => 'BAN LUAR BATLAX 120/60-17 S20 F TL HYPRSPORT','harga_satuan'=>1200000,'stok'=>4,'ket'=>''],
			['id_jenis_barang'=>'11','nama_barang' => 'BAN LUAR BATLAX 150/60-17 S20 R TL HYPRSPORT','harga_satuan'=>1602000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'11','nama_barang' => 'BAN LUAR FDR 100/80-17 TL SPORT XR EVO','harga_satuan'=>340000,'stok'=>3,'ket'=>''],
			['id_jenis_barang'=>'11','nama_barang' => 'BAN LUAR SWALLOW 70/90-17 TL 115 SEHWK','harga_satuan'=>166000,'stok'=>5,'ket'=>''],
			['id_jenis_barang'=>'11','nama_barang' => 'BAL SWALLOW 90, 90-17 TRACROS SB114R','harga_satuan'=>418000,'stok'=>5,'ket'=>'']
		];

		DB::table('tmbarang')->insert($barang);
	}

}