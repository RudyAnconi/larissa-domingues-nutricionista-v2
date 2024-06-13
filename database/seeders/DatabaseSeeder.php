<?php

namespace Database\Seeders;

use App\Models\ExamesLab;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createExamesLabs();
    }


    private function createExamesLabs(): void
    {
        $columns = "nome,marcador,valor_referencia_homem_min,valor_referencia_homem_max,valor_referencia_mulher_min,valor_referencia_mulher_max,valor_referencia_unidade,valor_ideal_homem_baixo_risco_min,valor_ideal_homem_baixo_risco_max,valor_ideal_homem_leve_min,valor_ideal_homem_leve_max,valor_ideal_homem_moderado_min,valor_ideal_homem_moderado_max,valor_ideal_homem_alto_min,valor_ideal_homem_alto_max,valor_ideal_homem_muito_alto_min,valor_ideal_homem_muito_alto_max,valor_ideal_mulher_baixo_risco_min,valor_ideal_mulher_baixo_risco_max,valor_ideal_mulher_leve_min,valor_ideal_mulher_leve_max,valor_ideal_mulher_moderado_min,valor_ideal_mulher_moderado_max,valor_ideal_mulher_alto_min,valor_ideal_mulher_alto_max,valor_ideal_mulher_muito_alto_min,valor_ideal_mulher_muito_alto_max,valor_ideal_unidade";

        $rows = [
            "Hemograma / Leucograma,Eritrócitos,4.5,6.0,4.0,5.5,10^6/mm³,4.5,5.5,,,,,,,,4.0,5.0,,,,,,,,10^6/mm³",
            "Hemograma / Leucograma,Hemoglobina,13,17,12,15.5,g/dL,14,16,,,,,,,,13,15,,,,,,,,g/dL",
            "Hemograma / Leucograma,Hematócrito,39,50,36,46,%,40,50,,,,,,,,38,47,,,,,,,,%",
            "Hemograma / Leucograma,VCM,80,100,,,,fL,83,97,,,,,,,,,,,,,,,fL",
            "Hemograma / Leucograma,HCM,28,32,,,,pg,28,31,,,,,,,,,,,,,,,pg",
            "Hemograma / Leucograma,CHCM,32,36,,,,g/dL,32,36,,,,,,,,,,,,,,,g/dL",
            "Hemograma / Leucograma,RDW,11,15,,,,%,11.5,14.5,,,,,,,,,,,,,,,%",
            "Hemograma / Leucograma,VSG,0,15,0,20,mm/h,0,10,,,,,,,,0,15,,,,,,,,mm/h",
            "Hemograma / Leucograma,Saturação Transferrina,20,50,,,,%,30,100,,,,,,,,,,,,,,,%",
            "Hemograma / Leucograma,Transferrina Livre,200,360,,,,mg/dL,170,280,,,,,,,,,,,,,,,mg/dL",
            "Hemograma / Leucograma,Ferritina,15,200,12,150,ng/mL,40,100,,,,,,,,,,,,,,,ng/mL",
            "Hemograma / Leucograma,TIBC,250,400,,,,µg/dL,220,360,,,,,,,,,,,,,,,µg/dL",
            "Hemograma / Leucograma,B12,300,900,,,,pg/mL,500,900,,,,,,,,,,,,,,,pg/mL",
            "Hemograma / Leucograma,Ácido Fólico,3.0,,,,,ng/mL,10,,,,,,,,,,,,,,,ng/mL",
            "Hemograma / Leucograma,Holotranscobalamina,40,,,,,pg/mL,70,100,,,,,,,,,,,,,,,pg/mL",
            "Hemograma / Leucograma,Ácido metilmalônico,,,,,,,0.2,,,,,,,,,,,,,,,,",
            "Hemograma / Leucograma,Homocisteína,3,10,,,,umol/L,10,,,,,,,,,,,,,,,umol/L",
            "Hemograma / Leucograma,Leucócitos,3.5,11.0,,,,/mm³,3.5,8.0,,,,,,,,,,,,,,,/mm³",
            "Hemograma / Leucograma,Neutrófilos,1.7,7.0,,,,/mm³,1.8,4.5,,,,,,,,,,,,,,,/mm³",
            "Hemograma / Leucograma,Relação Neutrófilos/Linfócitos,1,3,,,,,1,2,,,,,,,,,,,,,,,,",
            "Hemograma / Leucograma,Linfócitos,0.9,3.0,,,,/mm³,1.5,3.0,,,,,,,,,,,,,,,/mm³",
            "Hemograma / Leucograma,Monócitos,0.1,1.0,,,,/mm³,0.1,0.8,,,,,,,,,,,,,,,/mm³",
            "Hemograma / Leucograma,Eosinófilos,0,0.5,,,,/mm³,0.04,0.4,,,,,,,,,,,,,,,/mm³",
            "Hemograma / Leucograma,Basófilos,0,0.2,,,,/mm³,0.1,,,,,,,,,,,,,,,/mm³",
            "Hemograma / Leucograma,Plaquetas,150.0,450.0,,,,/mm³,150.0,300.0,,,,,,,,,,,,,,,/mm³",
            "Perfil Metabólico / Cardiovascular,Glicose jejum,70,99,,,,mg/dL,100,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,Insulina jejum,4.7,8.5,,,,mU/mL,8,,,,,,,,,,,,,,,mU/mL",
            "Perfil Metabólico / Cardiovascular,HOMA-IR,,,,,,2.0,,,,,,,,,,,,,,,,",
            "Perfil Metabólico / Cardiovascular,HOMA-beta,,,,,,100,,,,,,,,,,,,,,,,%",
            "Perfil Metabólico / Cardiovascular,Glicose 1h após 75g,,,,,,140,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,Glicose 2h após 75g,,,,,,120,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,Insulina 2h após 75g,,,,,,30,,,,,,,,,,,,,,,,mU/mL",
            "Perfil Metabólico / Cardiovascular,Colesterol total,,,,,,160,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,HDL,40,,,,,mg/dL,60,93,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,LDL,0,130,,,,mg/dL,100,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,Relação CT/HDL,0,4.5,,,,,3.3,,,,,,,,,,,,,,,,",
            "Perfil Metabólico / Cardiovascular,Relação TG/HDL,0,2.5,,,,,1.1,,,,,,,,,,,,,,,,",
            "Perfil Metabólico / Cardiovascular,Triglicérides,0,250,,,,mg/dL,100,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,ApoA1,110,180,110,205,mg/dL,130,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,ApoB,50,150,,,,mg/dL,90,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,ApoB/ApoA1,0.3,0.9,,,,,0.69,,,,,,,,,,,,,,,,",
            "Perfil Metabólico / Cardiovascular,Fibrinogênio,150,350,,,,mg/dL,250,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,Lipo(a),0,30,,,,mg/dL,10,,,,,,,,,,,,,,,mg/dL",
            "Perfil Metabólico / Cardiovascular,Lp-PLA2,120,342,,,,ng/mL,200,,,,,,,,,,,,,,,ng/mL",
            "Perfil Metabólico / Cardiovascular,Adiponectina,1.5,25.0,,,,mg/mL,10,,,,,,,,,,,,,,,mg/mL",
            "Perfil Metabólico / Cardiovascular,PCR ultrasensível,0,1.0,,,,mg/L,0.55,,,,,,,,,,,,,,,mg/L",
            "Perfil Metabólico / Cardiovascular,Mieloperoxidase,0,470,,,,pmol/L,400,,,,,,,,,,,,,,,pmol/L",
            "Perfil Renal,Creatinina,0.7,1.3,0.5,0.9,mg/dL,0.7,1.1,,,,,,,,0.5,0.9,,,,,,,,mg/dL",
            "Perfil Renal,Ureia,20,50,,,,mg/dL,40,,,,,,,,,,,,,,,mg/dL",
            "Perfil Renal,Ácido úrico,2.5,7.5,2.5,7.5,mg/dL,5.5,,,,,,,,4.5,,,,,,,,mg/dL",
            "Perfil Renal,Fósforo,2.5,4.5,,,,mg/dL,2.5,4.5,,,,,,,,,,,,,,,mg/dL",
            "Perfil Renal,Cálcio total,8.5,10.2,,,,mg/dL,8.8,9.2,,,,,,,,,,,,,,,mg/dL",
            "Perfil Renal,Fosfatase Alcalina,30,120,,,,U/L,90,,,,,,,,,,,,,,,U/L",
            "Perfil Renal,Gama GT,10,60,,,,U/L,30,,,,,,,,,,,,,,,U/L",
            "Perfil Renal,Bilirrubina Total,0,1.2,,,,mg/dL,1.0,,,,,,,,,,,,,,,mg/dL",
            "Perfil Tireoide,TSH,0.4,4.0,,,,mU/L,0.5,2.5,,,,,,,,,,,,,,,mU/L",
            "Perfil Tireoide,T4 livre,0.8,1.8,,,,ng/dL,1.0,1.5,,,,,,,,,,,,,,,ng/dL",
            "Perfil Tireoide,T3 total,80,200,,,,ng/dL,100,180,,,,,,,,,,,,,,,ng/dL",
            "Perfil Tireoide,T3 reverso,10,24,,,,ng/dL,15,,,,,,,,,,,,,,,ng/dL",
            "Perfil Tireoide,Anticorpos Anti-TPO,0,34,,,,U/mL,20,,,,,,,,,,,,,,,U/mL",
            "Perfil Tireoide,Anticorpos Anti-TG,0,100,,,,U/mL,50,,,,,,,,,,,,,,,U/mL",
            "Perfil Tireoide,Tireoglobulina,0,55,,,,ng/mL,55,,,,,,,,,,,,,,,ng/mL",
            "Perfil Tireoide,Iodo no plasma,52,109,,,,mcg/L,52,109,,,,,,,,,,,,,,,mcg/L",
            "Perfil Tireoide,Iodo Urina,52,109,,,,mcg/g creatinina,294,536,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Tireoide,Iodo Salivar,51.0,536,,,,mcg/L,294,536,,,,,,,,,,,,,,,mcg/L",
            "Perfil Adrenal,Cortisol sérico acordar,5.0,19.0,,,,mcg/dL,10,20,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Adrenal,Cortisol salivar acordar,17.7,34.3,,,,nmol/L,13.0,18.5,,,,,,,,,,,,,,,nmol/L",
            "Perfil Adrenal,Cortisol salivar manhã,17.7,34.3,,,,nmol/L,7.0,9.0,,,,,,,,,,,,,,,nmol/L",
            "Perfil Adrenal,Cortisol salivar tarde,3.7,9.2,,,,nmol/L,3.0,7.0,,,,,,,,,,,,,,,nmol/L",
            "Perfil Adrenal,Cortisol salivar noite,0,4.9,,,,nmol/L,2.0,4.0,,,,,,,,,,,,,,,nmol/L",
            "Perfil Adrenal,25-hidroxid D3,25,80,,,,ng/mL,40,60,,,,,,,,,,,,,,,ng/mL",
            "Perfil Adrenal,1,25-dihidroxi D3,25,65,,,,pg/mL,40,60,,,,,,,,,,,,,,,pg/mL",
            "Perfil Adrenal,Cálcio sérico,8.8,10.6,,,,mg/dL,9.2,10.2,,,,,,,,,,,,,,,mg/dL",
            "Perfil Adrenal,Cálcio ionico,4.6,5.3,,,,mg/dL,4.7,5.1,,,,,,,,,,,,,,,mg/dL",
            "Perfil Adrenal,Magnésio soro,1.8,2.6,,,,mg/dL,2.0,2.5,,,,,,,,,,,,,,,mg/dL",
            "Perfil Adrenal,Magnésio eritrocitário,1.4,1.7,,,,mmol/L,1.5,2.5,,,,,,,,,,,,,,,mmol/L",
            "Perfil Adrenal,PTH intacto,10,65,,,,pg/mL,45,,,,,,,,,,,,,,,pg/mL",
            "Perfil Adrenal,Creatinina soro,0.7,1.3,,,,mg/dL,0.7,1.1,,,,,,,,,,,,,,,mg/dL",
            "Perfil Adrenal,Creatinina urina,700,1600,,,,mg/24h,700,1100,,,,,,,,,,,,,,,mg/24h",
            "Perfil Adrenal,Rel. Cálcio/Creatinina,0,0.1,,,,mg/mg,0.0,0.2,,,,,,,,,,,,,,,mg/mg",
            "Perfil Minerais e Vitaminas,Ácido fólico soro,3,17,,,,ng/mL,10,,,,,,,,,,,,,,,ng/mL",
            "Perfil Minerais e Vitaminas,Selênio soro,60,160,,,,ng/mL,120,150,,,,,,,,,,,,,,,ng/mL",
            "Perfil Minerais e Vitaminas,Zinco sanguíneo,70,120,,,,mcg/dL,90,120,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Zinco soro,70,120,,,,mcg/dL,90,120,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Zinco eritrocitário,40,44,,,,mcg/g Hb,40,44,,,,,,,,,,,,,,,mcg/g Hb",
            "Perfil Minerais e Vitaminas,Cobre soro,70,140,,,,mcg/dL,90,110,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Cobre eritrocitário,14,26,,,,mcg/g Hb,17,22,,,,,,,,,,,,,,,mcg/g Hb",
            "Perfil Minerais e Vitaminas,Cobre urina,15,60,,,,mcg/24h,5,40,,,,,,,,,,,,,,,mcg/24h",
            "Perfil Minerais e Vitaminas,Retinol,30,80,,,,mcg/dL,45,65,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Betacaroteno,5,60,,,,mcg/dL,30,50,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Licopeno,10,100,,,,mcg/dL,25,50,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Vitamina E,5.5,17,,,,mcg/dL,10,15,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Vitamina A,30,60,,,,mcg/dL,45,60,,,,,,,,,,,,,,,mcg/dL",
            "Perfil Minerais e Vitaminas,Vitamina D,20,50,,,,ng/mL,40,60,,,,,,,,,,,,,,,ng/mL",
            "Perfil Toxicológico,Chumbo urina,0,50,,,,mcg/g creatinina,7.5,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Toxicológico,Mercúrio urina,0,20,,,,mcg/g creatinina,5,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Toxicológico,Cádmio urina,0,5,,,,mcg/g creatinina,0.5,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Toxicológico,Alumínio urina,0,2,,,,mcg/g creatinina,2,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Toxicológico,Arsênio urina,0,10,,,,mcg/g creatinina,5,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Toxicológico,Cromo urina,0,3,,,,mcg/g creatinina,3,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Toxicológico,Cobalto urina,0,1,,,,mcg/g creatinina,1,,,,,,,,,,,,,,,mcg/g creatinina",
            "Perfil Toxicológico,Níquel urina,0,23,,,,mcg/g creatinina,5,,,,,,,,,,,,,,,mcg/g creatinina",
            "Urina,pH urinário,5,8,,,,,6.6,7.5,,,,,,,,,,,,,,,,",
            "Urina,Densidade urinária,1005,1030,,,,,1005,1010,,,,,,,,,,,,,,,,",
            "Saúde Intestinal,Índice de Simpson,,,,,,,400,,,,,,,,,,,,,,,,",
            "Saúde Intestinal,Indicador de Riqueza,,,,,,,microbiota rica,,,,,,,,,,,,,,,,",
            "Saúde Intestinal,Razão Firmicutes/Bacteroidetes,,,,,,,85,95,,,,,,,,,,,,,,,,",
        ];

        $rows = [
            ["Hemograma / Leucograma", "Eritrócitos", "4.5", "6.0", "4.0", "5.5", "10^6/mm³", "4.5", "5.5", "", "", "", "", "", "", "", "", "4.0", "5.0", "", "", "", "", "", "", "", "", "10^6/mm³"],
            ["Hemograma / Leucograma", "Hemoglobina", "13", "17", "12", "15.5", "g/dL", "14", "16", "", "", "", "", "", "", "", "", "13", "15", "", "", "", "", "", "", "", "", "g/dL"],
            ["Hemograma / Leucograma", "Hematócrito", "39", "50", "36", "46", "%", "40", "50", "", "", "", "", "", "", "", "", "38", "47", "", "", "", "", "", "", "", "", "%"],
            ["Hemograma / Leucograma", "VCM", "80", "100", "", "", "fL", "83", "97", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "fL"],
            ["Hemograma / Leucograma", "HCM", "28", "32", "", "", "pg", "28", "31", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "pg"],
            ["Hemograma / Leucograma", "CHCM", "32", "36", "", "", "g/dL", "32", "36", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "g/dL"],
            ["Hemograma / Leucograma", "RDW", "11", "15", "", "", "%", "11.5", "14.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "%"],
            ["Hemograma / Leucograma", "VSG", "0", "15", "0", "20", "mm/h", "0", "10", "", "", "", "", "", "", "", "", "0", "15", "", "", "", "", "", "", "", "", "mm/h"],
            ["Hemograma / Leucograma", "Saturação Transferrina", "20", "50", "", "", "%", "30", "100", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "%"],
            ["Hemograma / Leucograma", "Transferrina Livre", "200", "360", "", "", "mg/dL", "170", "280", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Hemograma / Leucograma", "Ferritina", "15", "200", "12", "150", "ng/mL", "40", "100", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Hemograma / Leucograma", "TIBC", "250", "400", "", "", "µg/dL", "220", "360", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "µg/dL"],
            ["Hemograma / Leucograma", "B12", "300", "900", "", "", "pg/mL", "500", "900", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "pg/mL"],
            ["Hemograma / Leucograma", "Ácido Fólico", "3.0", "", "", "", "ng/mL", "10", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Hemograma / Leucograma", "Holotranscobalamina", "40", "", "", "", "pg/mL", "70", "100", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "pg/mL"],
            ["Hemograma / Leucograma", "Ácido metilmalônico", "", "", "", "", "", "0.2", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Hemograma / Leucograma", "Homocisteína", "3", "10", "", "", "umol/L", "10", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "umol/L"],
            ["Hemograma / Leucograma", "Leucócitos", "3.5", "11.0", "", "", "/mm³", "3.5", "8.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "/mm³"],
            ["Hemograma / Leucograma", "Neutrófilos", "1.7", "7.0", "", "", "/mm³", "1.8", "4.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "/mm³"],
            ["Hemograma / Leucograma", "Relação Neutrófilos/Linfócitos", "1", "3", "", "", "", "1", "2", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Hemograma / Leucograma", "Linfócitos", "0.9", "3.0", "", "", "/mm³", "1.5", "3.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "/mm³"],
            ["Hemograma / Leucograma", "Monócitos", "0.1", "1.0", "", "", "/mm³", "0.1", "0.8", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "/mm³"],
            ["Hemograma / Leucograma", "Eosinófilos", "0", "0.5", "", "", "/mm³", "0.04", "0.4", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "/mm³"],
            ["Hemograma / Leucograma", "Basófilos", "0", "0.2", "", "", "/mm³", "0.1", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "/mm³"],
            ["Hemograma / Leucograma", "Plaquetas", "150.0", "450.0", "", "", "/mm³", "150.0", "300.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "/mm³"],
            ["Perfil Metabólico / Cardiovascular", "Glicose jejum", "70", "99", "", "", "mg/dL", "100", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "Insulina jejum", "4.7", "8.5", "", "", "mU/mL", "8", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mU/mL"],
            ["Perfil Metabólico / Cardiovascular", "HOMA-IR", "", "", "", "", "", "2.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Perfil Metabólico / Cardiovascular", "HOMA-beta", "", "", "", "", "", "100", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "%"],
            ["Perfil Metabólico / Cardiovascular", "Glicose 1h após 75g", "", "", "", "", "", "140", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "Glicose 2h após 75g", "", "", "", "", "", "120", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "Insulina 2h após 75g", "", "", "", "", "", "30", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mU/mL"],
            ["Perfil Metabólico / Cardiovascular", "Colesterol total", "", "", "", "", "", "", "160", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "HDL", "40", "", "", "", "mg/dL", "60", "93", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "LDL", "0", "130", "", "", "mg/dL", "100", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "Relação CT/HDL", "0", "4.5", "", "", "", "3.3", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Perfil Metabólico / Cardiovascular", "Relação TG/HDL", "0", "2.5", "", "", "", "1.1", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Perfil Metabólico / Cardiovascular", "Triglicérides", "0", "250", "", "", "mg/dL", "100", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "ApoA1", "110", "180", "110", "205", "mg/dL", "130", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "ApoB", "50", "150", "", "", "mg/dL", "90", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "ApoB/ApoA1", "0.3", "0.9", "", "", "", "0.69", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Perfil Metabólico / Cardiovascular", "Fibrinogênio", "150", "350", "", "", "mg/dL", "250", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "Lipo(a)", "0", "30", "", "", "mg/dL", "10", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Metabólico / Cardiovascular", "Lp-PLA2", "120", "342", "", "", "ng/mL", "200", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Perfil Metabólico / Cardiovascular", "Adiponectina", "1.5", "25.0", "", "", "mg/mL", "10", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/mL"],
            ["Perfil Metabólico / Cardiovascular", "PCR ultrasensível", "0", "1.0", "", "", "mg/L", "0.55", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/L"],
            ["Perfil Metabólico / Cardiovascular", "Mieloperoxidase", "0", "470", "", "", "pmol/L", "400", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "pmol/L"],
            ["Perfil Renal", "Creatinina", "0.7", "1.3", "0.5", "0.9", "mg/dL", "0.7", "1.1", "", "", "", "", "", "", "", "", "0.5", "0.9", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Renal", "Ureia", "20", "50", "", "", "mg/dL", "40", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Renal", "Ácido úrico", "2.5", "7.5", "2.5", "7.5", "mg/dL", "5.5", "", "", "", "", "", "", "", "", "", "", "4.5", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Renal", "Fósforo", "2.5", "4.5", "", "", "mg/dL", "2.5", "4.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Renal", "Cálcio total", "8.5", "10.2", "", "", "mg/dL", "8.8", "9.2", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Renal", "Fosfatase Alcalina", "30", "120", "", "", "U/L", "90", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "U/L"],
            ["Perfil Renal", "Gama GT", "10", "60", "", "", "U/L", "30", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "U/L"],
            ["Perfil Renal", "Bilirrubina Total", "0", "1.2", "", "", "mg/dL", "1.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Tireoide", "TSH", "0.4", "4.0", "", "", "mU/L", "0.5", "2.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "mU/L"],
            ["Perfil Tireoide", "T4 livre", "0.8", "1.8", "", "", "ng/dL", "1.0", "1.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/dL"],
            ["Perfil Tireoide", "T3 total", "80", "200", "", "", "ng/dL", "100", "180", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/dL"],
            ["Perfil Tireoide", "T3 reverso", "10", "24", "", "", "ng/dL", "15", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/dL"],
            ["Perfil Tireoide", "Anticorpos Anti-TPO", "0", "34", "", "", "U/mL", "20", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "U/mL"],
            ["Perfil Tireoide", "Anticorpos Anti-TG", "0", "100", "", "", "U/mL", "50", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "U/mL"],
            ["Perfil Tireoide", "Tireoglobulina", "0", "55", "", "", "ng/mL", "55", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Perfil Tireoide", "Iodo no plasma", "52", "109", "", "", "mcg/L", "52", "109", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/L"],
            ["Perfil Tireoide", "Iodo Urina", "52", "109", "", "", "mcg/g creatinina", "294", "536", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Tireoide", "Iodo Salivar", "51.0", "536", "", "", "mcg/L", "294", "536", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/L"],
            ["Perfil Adrenal", "Cortisol sérico acordar", "5.0", "19.0", "", "", "mcg/dL", "10", "20", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Adrenal", "Cortisol salivar acordar", "17.7", "34.3", "", "", "nmol/L", "13.0", "18.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "nmol/L"],
            ["Perfil Adrenal", "Cortisol salivar manhã", "17.7", "34.3", "", "", "nmol/L", "7.0", "9.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "nmol/L"],
            ["Perfil Adrenal", "Cortisol salivar tarde", "3.7", "9.2", "", "", "nmol/L", "3.0", "7.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "nmol/L"],
            ["Perfil Adrenal", "Cortisol salivar noite", "0", "4.9", "", "", "nmol/L", "2.0", "4.0", "", "", "", "", "", "", "", "", "", "", "", "", "", "nmol/L"],
            ["Perfil Adrenal", "25-hidroxid D3", "25", "80", "", "", "ng/mL", "40", "60", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Perfil Adrenal", "1,25-dihidroxi D3", "25", "65", "", "", "pg/mL", "40", "60", "", "", "", "", "", "", "", "", "", "", "", "", "", "pg/mL"],
            ["Perfil Adrenal", "Cálcio sérico", "8.8", "10.6", "", "", "mg/dL", "9.2", "10.2", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Adrenal", "Cálcio ionico", "4.6", "5.3", "", "", "mg/dL", "4.7", "5.1", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Adrenal", "Magnésio soro", "1.8", "2.6", "", "", "mg/dL", "2.0", "2.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Adrenal", "Magnésio eritrocitário", "1.4", "1.7", "", "", "mmol/L", "1.5", "2.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "mmol/L"],
            ["Perfil Adrenal", "PTH intacto", "10", "65", "", "", "pg/mL", "45", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "pg/mL"],
            ["Perfil Adrenal", "Creatinina soro", "0.7", "1.3", "", "", "mg/dL", "0.7", "1.1", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/dL"],
            ["Perfil Adrenal", "Creatinina urina", "700", "1600", "", "", "mg/24h", "700", "1100", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/24h"],
            ["Perfil Adrenal", "Rel. Cálcio/Creatinina", "0", "0.1", "", "", "mg/mg", "0.0", "0.2", "", "", "", "", "", "", "", "", "", "", "", "", "", "mg/mg"],
            ["Perfil Minerais e Vitaminas", "Ácido fólico soro", "3", "17", "", "", "ng/mL", "10", "", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Perfil Minerais e Vitaminas", "Selênio soro", "60", "160", "", "", "ng/mL", "120", "150", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Perfil Minerais e Vitaminas", "Zinco sanguíneo", "70", "120", "", "", "mcg/dL", "90", "120", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Zinco soro", "70", "120", "", "", "mcg/dL", "90", "120", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Zinco eritrocitário", "40", "44", "", "", "mcg/g Hb", "40", "44", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g Hb"],
            ["Perfil Minerais e Vitaminas", "Cobre soro", "70", "140", "", "", "mcg/dL", "90", "110", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Cobre eritrocitário", "14", "26", "", "", "mcg/g Hb", "17", "22", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g Hb"],
            ["Perfil Minerais e Vitaminas", "Cobre urina", "15", "60", "", "", "mcg/24h", "5", "40", "", "", "", "", "", "", "", "", "", "", "", "mcg/24h"],
            ["Perfil Minerais e Vitaminas", "Retinol", "30", "80", "", "", "mcg/dL", "45", "65", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Betacaroteno", "5", "60", "", "", "mcg/dL", "30", "50", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Licopeno", "10", "100", "", "", "mcg/dL", "25", "50", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Vitamina E", "5.5", "17", "", "", "mcg/dL", "10", "15", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Vitamina A", "30", "60", "", "", "mcg/dL", "45", "60", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/dL"],
            ["Perfil Minerais e Vitaminas", "Vitamina D", "20", "50", "", "", "ng/mL", "40", "60", "", "", "", "", "", "", "", "", "", "", "", "", "ng/mL"],
            ["Perfil Toxicológico", "Chumbo urina", "0", "50", "", "", "mcg/g creatinina", "7.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Toxicológico", "Mercúrio urina", "0", "20", "", "", "mcg/g creatinina", "5", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Toxicológico", "Cádmio urina", "0", "5", "", "", "mcg/g creatinina", "0.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Toxicológico", "Alumínio urina", "0", "2", "", "", "mcg/g creatinina", "2", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Toxicológico", "Arsênio urina", "0", "10", "", "", "mcg/g creatinina", "5", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Toxicológico", "Cromo urina", "0", "3", "", "", "mcg/g creatinina", "3", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Toxicológico", "Cobalto urina", "0", "1", "", "", "mcg/g creatinina", "1", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Perfil Toxicológico", "Níquel urina", "0", "23", "", "", "mcg/g creatinina", "5", "", "", "", "", "", "", "", "", "", "", "", "", "", "mcg/g creatinina"],
            ["Urina", "pH urinário", "5", "8", "", "", "", "6.6", "7.5", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Urina", "Densidade urinária", "1005", "1030", "", "", "", "1005", "1010", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Saúde Intestinal", "Índice de Simpson", "", "", "", "", "", "400", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Saúde Intestinal", "Indicador de Riqueza", "", "", "", "", "", "microbiota rica", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
            ["Saúde Intestinal", "Razão Firmicutes/Bacteroidetes", "", "", "", "", "", "85", "95", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""],
        ];






        $data = [];
        $cols = explode(',', $columns);
        foreach ($cols as $col) {
            $col = trim($col);
            $data[$col] = "";
        }
        // dd($data);

        foreach ($rows as $row) {
            var_dump(count($row));
            // $i = 0;
            // dd(count($cols), count($values));
            // foreach ($cols as $col) {
            //     $col = trim($col);
            //     $data[$col] = trim($values[$i]);
            //     $i++;
            // }
            // dd($data);
            // ExamesLab::factory()->create($data);
        }
    }

    private function createUser(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
