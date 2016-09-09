<?php

/**
 * Created by PhpStorm.
 * User: Narek
 * Date: 9/9/2016
 * Time: 1:24 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BreadTableSeeder extends Seeder {
    public function run() {
        DB::table('breads')->insert([
            ['id' => 1,
            'date' => "2016-07-01",
            'title' => "Երբ Աստված մեզ հետ է",
            'read' => "Ա Մնացորդաց 28.9-20",
            'verse' => "Զորացի՛ր և քա՛ջ եղիր, գործի՛ր և մի՛ վախեցիր ու մի՛ զարհուրիր,քանզի իմ Տեր Աստվածը քեզ հետ է, նաքեզ չի թողնի և չիլքի: Ա Մնաց. 28.20",
            'bibleinayear' => "Հոμ 20-21, Գործք Առ. 10.24-48",
            'text' => "Երμ առաջին անգամ փորձում
                        էի լաստով նավել ջրի հոս
                        անքն ի վեր, հանկարծ լսեցի հորձ
                        անքի ահավոր գոչյուն: Մի պահ
                        սաստիկ վախեցա. նման ահալի և
                        վտանգավոր μան առաջին անգամ էր
                        պատահում ինձ: Բայց այդ ամենը
                        կարճ տևեց, քանի որ լաստանավոր-
                        դը մեր լաստը անվտանգ ուղղությ
                        ամμ էր առաջնորդում: Ես ապա-
                        հով էի գոնե մինչև ջրի հաջորդ հորձ
                        անքը:
                        Մեր կյանքում կատարվող անցումն
                        երը հաճախ նման են ջրի այդ
                        հորձանքին: Անխուսափելի իրողություն
                        է ցատկը կյանքի մի շրջանից
                        դեպի մյուսը՝ միջնակարգ դպրոցից
                        համալսարան տեղափոխվելը, ամուրի
                        վիճակից ամուսնական կյանքի մեջ մտնելը, աշխատանքային
                        կենսաշրջանից հանգստյան անցնելը: Չմոռանանք կողակցին
                        կորցնելու և այրիանալու մասին ևս: Այս ամենը անորոշություն
                        և անապահովություն է մտցնում մեր կյանքի մեջ:
                        Հին Կտակարանում հիշատակված կարևոր անցումներից
                        մեկը Սողոմոն թագավորի կողմից իր հոր՝ Դավթի գահը ժա-
                        ռանգելն է: Վստահ եմ, որ նա ընկել էր ապագայի հանդեպ
                        մեծ անորոշության մեջ: Դրա համար էլ հայրը, խրատելով
                        նրան, ասում էր. «Զորացի՛ր ու քա՛ջ եղիր, գործի՛ր և մի՛
                        վախեցիր… քանզի իմ Տեր Աստվածը քեզ հետ է» (Ա.
                        Մնաց. 28.20):
                        Հավանաμար դու էլ ունես դժվարին անցումների շրջաններ
                        քո կյանքում: Բայց երμ Աստված քո լաստի մեջ է, դու մենակ
                        չես: Աչքդ կենտրոնացրո՛ւ Նրա վրա: Նա պիտի քեզ անցկացնի
                        ծանր հորձանքներից և հասցնի խաղաղ հանգրվան:",
            'aphorism' => "Աստված քեզ պիտի առաջնորդի արագընթաց փոփոխությունն երի ժամանակ:"
            ],
            ['id' => 2,
                'date' => "2016-07-02",
                'title' => "Երբ Աստված մեզ հետ է",
                'read' => "Ա Մնացորդաց 28.9-20",
                'verse' => "Զորացի՛ր և քա՛ջ եղիր, գործի՛ր և մի՛ վախեցիր ու մի՛ զարհուրիր,քանզի իմ Տեր Աստվածը քեզ հետ է, նաքեզ չի թողնի և չիլքի: Ա Մնաց. 28.20",
                'bibleinayear' => "Հոμ 20-21, Գործք Առ. 10.24-48",
                'text' => "Երμ առաջին անգամ փորձում
                        էի լաստով նավել ջրի հոս
                        անքն ի վեր, հանկարծ լսեցի հորձ
                        անքի ահավոր գոչյուն: Մի պահ
                        սաստիկ վախեցա. նման ահալի և
                        վտանգավոր μան առաջին անգամ էր
                        պատահում ինձ: Բայց այդ ամենը
                        կարճ տևեց, քանի որ լաստանավոր-
                        դը մեր լաստը անվտանգ ուղղությ
                        ամμ էր առաջնորդում: Ես ապա-
                        հով էի գոնե մինչև ջրի հաջորդ հորձ
                        անքը:
                        Մեր կյանքում կատարվող անցումն
                        երը հաճախ նման են ջրի այդ
                        հորձանքին: Անխուսափելի իրողություն
                        է ցատկը կյանքի մի շրջանից
                        դեպի մյուսը՝ միջնակարգ դպրոցից
                        համալսարան տեղափոխվելը, ամուրի
                        վիճակից ամուսնական կյանքի մեջ մտնելը, աշխատանքային
                        կենսաշրջանից հանգստյան անցնելը: Չմոռանանք կողակցին
                        կորցնելու և այրիանալու մասին ևս: Այս ամենը անորոշություն
                        և անապահովություն է մտցնում մեր կյանքի մեջ:
                        Հին Կտակարանում հիշատակված կարևոր անցումներից
                        մեկը Սողոմոն թագավորի կողմից իր հոր՝ Դավթի գահը ժա-
                        ռանգելն է: Վստահ եմ, որ նա ընկել էր ապագայի հանդեպ
                        մեծ անորոշության մեջ: Դրա համար էլ հայրը, խրատելով
                        նրան, ասում էր. «Զորացի՛ր ու քա՛ջ եղիր, գործի՛ր և մի՛
                        վախեցիր… քանզի իմ Տեր Աստվածը քեզ հետ է» (Ա.
                        Մնաց. 28.20):
                        Հավանաμար դու էլ ունես դժվարին անցումների շրջաններ
                        քո կյանքում: Բայց երμ Աստված քո լաստի մեջ է, դու մենակ
                        չես: Աչքդ կենտրոնացրո՛ւ Նրա վրա: Նա պիտի քեզ անցկացնի
                        ծանր հորձանքներից և հասցնի խաղաղ հանգրվան:",
                'aphorism' => "Աստված քեզ պիտի առաջնորդի արագընթաց փոփոխությունն երի ժամանակ:"
            ],
            ['id' => 3,
                'date' => "2016-07-03",
                'title' => "Երբ Աստված մեզ հետ է",
                'read' => "Ա Մնացորդաց 28.9-20",
                'verse' => "Զորացի՛ր և քա՛ջ եղիր, գործի՛ր և մի՛ վախեցիր ու մի՛ զարհուրիր,քանզի իմ Տեր Աստվածը քեզ հետ է, նաքեզ չի թողնի և չիլքի: Ա Մնաց. 28.20",
                'bibleinayear' => "Հոμ 20-21, Գործք Առ. 10.24-48",
                'text' => "Երμ առաջին անգամ փորձում
                        էի լաստով նավել ջրի հոս
                        անքն ի վեր, հանկարծ լսեցի հորձ
                        անքի ահավոր գոչյուն: Մի պահ
                        սաստիկ վախեցա. նման ահալի և
                        վտանգավոր μան առաջին անգամ էր
                        պատահում ինձ: Բայց այդ ամենը
                        կարճ տևեց, քանի որ լաստանավոր-
                        դը մեր լաստը անվտանգ ուղղությ
                        ամμ էր առաջնորդում: Ես ապա-
                        հով էի գոնե մինչև ջրի հաջորդ հորձ
                        անքը:
                        Մեր կյանքում կատարվող անցումն
                        երը հաճախ նման են ջրի այդ
                        հորձանքին: Անխուսափելի իրողություն
                        է ցատկը կյանքի մի շրջանից
                        դեպի մյուսը՝ միջնակարգ դպրոցից
                        համալսարան տեղափոխվելը, ամուրի
                        վիճակից ամուսնական կյանքի մեջ մտնելը, աշխատանքային
                        կենսաշրջանից հանգստյան անցնելը: Չմոռանանք կողակցին
                        կորցնելու և այրիանալու մասին ևս: Այս ամենը անորոշություն
                        և անապահովություն է մտցնում մեր կյանքի մեջ:
                        Հին Կտակարանում հիշատակված կարևոր անցումներից
                        մեկը Սողոմոն թագավորի կողմից իր հոր՝ Դավթի գահը ժա-
                        ռանգելն է: Վստահ եմ, որ նա ընկել էր ապագայի հանդեպ
                        մեծ անորոշության մեջ: Դրա համար էլ հայրը, խրատելով
                        նրան, ասում էր. «Զորացի՛ր ու քա՛ջ եղիր, գործի՛ր և մի՛
                        վախեցիր… քանզի իմ Տեր Աստվածը քեզ հետ է» (Ա.
                        Մնաց. 28.20):
                        Հավանաμար դու էլ ունես դժվարին անցումների շրջաններ
                        քո կյանքում: Բայց երμ Աստված քո լաստի մեջ է, դու մենակ
                        չես: Աչքդ կենտրոնացրո՛ւ Նրա վրա: Նա պիտի քեզ անցկացնի
                        ծանր հորձանքներից և հասցնի խաղաղ հանգրվան:",
                'aphorism' => "Աստված քեզ պիտի առաջնորդի արագընթաց փոփոխությունն երի ժամանակ:"
            ],


        ]);
    }
}