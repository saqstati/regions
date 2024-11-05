document.addEventListener("DOMContentLoaded", function () {
  function getURLParameter(name) {
    const regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
    const results = regex.exec(location.search);
    return results ? decodeURIComponent(results[1].replace(/\+/g, " ")) : "";
  }

  const linkData = {
    births: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Kvareli.xlsx",
      },
    },
    ratio: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kvareli.xlsx",
      },
    },
    ageMother: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Kvareli.xlsx",
      },
    },
    stillbirths: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქედას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქობულეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/შუახევის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხელვაჩაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხულოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/აბაშას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ზუგდიდის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მარტვილის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მესტიას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სენაკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ფოთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჩხოროწყუს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წალენჯიხას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხობის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ლანჩხუთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ოზურგეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჩოხატაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ადიგენის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ასპინძას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახალქალაქის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახალციხეს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბორჯომის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ნინოწმინდას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბაღდათის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ვანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ზესტაფონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თერჯოლას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სამტრედიას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/საჩხერეს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ტყიბულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქუთაისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წყალტუბოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჭიათურას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხარაგაულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ამბროლაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ლენტეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ ცაგერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბოლნისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/გარდაბანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/დმანისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თეთრიწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მარნეულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/რუსთავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წალკას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/გორის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/კასპის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქარელის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხაშურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/დუშეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თიანეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მცხეთას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ყაზბეგის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თბილისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახმეტას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/გურჯაანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/დედოფლისწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თელავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ლაგოდეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/საგარეჯოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სიღნაღის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ყვარელის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kvareli.xlsx",
      },
    },
    deathagesex: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kvareli.xlsx",
      },
    },
    deathclases: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქედას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქობულეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/შუახევის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხელვაჩაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხულოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/აბაშას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ზუგდიდის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/მარტვილის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/მესტიას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სენაკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ფოთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ჩხოროწყუს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/წალენჯიხას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხობის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ლანჩხუთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ოზურგეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ჩოხატაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ადიგენის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ასპინძას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ახალქალაქის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ახალციხეს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ბორჯომის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ნინოწმინდას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ბაღდათის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ვანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ზესტაფონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თერჯოლას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სამტრედიას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/საჩხერეს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ტყიბულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქუთაისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/წყალტუბოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ჭიათურას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხარაგაულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ამბროლაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ლენტეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ ცაგერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ბოლნისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/გარდაბანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/დმანისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თეთრიწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/მარნეულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/რუსთავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/წალკას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/გორის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/კასპის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქარელის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხაშურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/დუშეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თიანეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/მცხეთას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ყაზბეგის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თბილისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ახმეტას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/გურჯაანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/დედოფლისწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თელავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ლაგოდეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/საგარეჯოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სიღნაღის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ყვარელის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kvareli.xlsx",
      },
    },
    agemarriage: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Kvareli.xlsx",
      },
    },
    meanagemarriage: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Kvareli.xlsx",
      },
    },
    numberdivorce: {
      Batumi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Kvareli.xlsx",
      },
    },
    populationDescription2: {
      Batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ხულო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/გორი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Kvareli.xlsx",
      },
    },
    populationDescription3: {
      Batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ხულო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/გორი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kvareli.xlsx",
      },
    },
    populationDescription4: {
      Batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხულო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მესტია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხობი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ვანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/წალკა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გორი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/კასპი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თელავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kvareli.xlsx",
      },
    },
    populationDescription5: {
      Batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ხულო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/მესტია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ხობი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ვანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ხონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/წალკა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/გორი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/კასპი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/თელავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Kvareli.xlsx",
      },
    },
    populationDescription6: {
      Batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ხულო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/მესტია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ხობი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ვანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ხონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/წალკა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/გორი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/კასპი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/თელავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Kvareli.xlsx",
      },
    },
    employmentAndSalaries2: {
      Batumi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/მესტია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ხობი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ვანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ხონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/წალკა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/გორი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/კასპი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/თელავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Kvareli.xlsx",
      },
    },
    employmentAndSalaries3: {
      Batumi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/მესტია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ხობი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ვანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ხონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/წალკა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/გორი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/კასპი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/თელავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Kvareli.xlsx",
      },
    },
    employmentAndSalaries4: {
      Batumi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/მესტია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ხობი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ვანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ხონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/წალკა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/გორი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/კასპი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/თელავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Kvareli.xlsx",
      },
    },
    hotels5: {
      Batumi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Batumi%20Municipality.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Keda%20Municipality.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Kobuleti%20Municipality.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Shuakhevi%20Municipality.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Khelvachauri%20Municipality.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Khulo%20Municipality.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Abasha%20Municipality.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Zugdidi%20Municipality.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Martvili%20Municipality.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/მესტია.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Mestia%20Municipality.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Senaki%20Municipality.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Poti%20Municipality.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Chkhorotsku%20Municipality.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tsalenjikha%20Municipality.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხობი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Khobi%20Municipality.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Lanchkhuti%20Municipality.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Ozurgeti%20Municipality.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Chokhatauri%20Municipality.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Adigeni%20Municipality.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Aspindza%20Municipality.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Akhalkalaki%20Municipality.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Akhaltsikhe%20Municipality.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Borjomi%20Municipality.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Ninotsminda%20Municipality.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Baghdati%20Municipality.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ვანი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Vani%20Municipality.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Zestaponi%20Municipality.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Terjola%20Municipality.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Samtredia%20Municipality.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Sachkhere%20Municipality.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tkibuli%20Municipality.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Kutaisi%20Municipality.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tskaltubo%20Municipality.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Chiatura%20Municipality.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Kharagauli%20Municipality.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხონი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Khoni%20Municipality.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Ambrolauri%20Municipality.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Lentekhi%20Municipality.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ონი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Oni%20Municipality.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tsageri%20Municipality.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Bolnisi%20Municipality.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Gardabani%20Municipality.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Dmanisi%20Municipality.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tetritskaro%20Municipality.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Marneuli%20Municipality.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Rustavi%20Municipality.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/წალკა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tsalka%20Municipality.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/გორი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Gori%20Municipality.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/კასპი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Kaspi%20Municipality.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Kareli%20Municipality.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Khashuri%20Municipality.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Dusheti%20Municipality.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tianeti%20Municipality.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Mtskheta%20Municipality.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Kazbegi%20Municipality.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Tbilisi%20Municipality.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Akhmeta%20Municipality.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Gurjaani%20Municipality.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Dedoplistskaro%20Municipality.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/თელავი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Telavi%20Municipality.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Lagodekhi%20Municipality.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Sagarejo%20Municipality.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Sighnaghi%20Municipality.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Kvareli%20Municipality.xlsx",
      },
    },
    healthCareAndSocialSecurity11: {
      Batumi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქედის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქობულეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/შუახევის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ხელვაჩაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ხულოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/აბაშის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ზუგდიდის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/მარტვილის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/მესტიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/სენაკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ფოთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ჩხოროწყუს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/წალენჯიხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ხობის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ლანჩხუთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ოზურგეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ჩოხატაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ადიგენის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ასპინძის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ახალქალაქის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ახალციხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ბორჯომის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ნინოწმინდის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ბაღდათის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ვანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ზესტაფონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/თერჯოლის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/სამტრედიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/საჩხერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ტყიბულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქ.%20ქუთაისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/წყალტუბოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ჭიათურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ხარაგაულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ხონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ამბროლაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ლენტეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ ცაგერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ბოლნისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/გარდაბნის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/დმანისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/თეთრიწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/მარნეულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქ.%20რუსთავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/წალკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/გორის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/კასპის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქარელის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ხაშურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/დუშეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/თიანეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/მცხეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ყაზბეგის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქ.%20თბილისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ახმეტის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/გურჯაანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/დედოფლისწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/თელავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ლაგოდეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/საგარეჯოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/სიღნაღის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ყვარლის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Kvareli.xlsx",
      },
    },
    education3: {
      Batumi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/მესტია.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ხობი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ვანი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ხონი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ონი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/წალკა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/გორი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/კასპი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/თელავი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Kvareli.xlsx",
      },
    },
    education4: {
      Batumi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქედას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქობულეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/შუახევის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ხელვაჩაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ხულოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/აბაშას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ზუგდიდის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/მარტვილის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/მესტიას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/სენაკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ფოთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ჩხოროწყუს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/წალენჯიხას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ხობის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ლანჩხუთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ოზურგეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ჩოხატაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ადიგენის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ასპინძას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ახალქალაქის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ახალციხეს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ბორჯომის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ნინოწმინდას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ბაღდათის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ვანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ზესტაფონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/თერჯოლას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/სამტრედიას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/საჩხერეს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ტყიბულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქუთაისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/წყალტუბოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ჭიათურას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ხარაგაულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ხონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ამბროლაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ლენტეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ ცაგერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ბოლნისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/გარდაბანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/დმანისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/თეთრიწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/მარნეულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/რუსთავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/წალკას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/გორის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/კასპის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქარელის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ხაშურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/დუშეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/თიანეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/მცხეთას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ყაზბეგის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/თბილისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ახმეტას%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/გურჯაანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/დედოფლისწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/თელავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ლაგოდეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/საგარეჯოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/სიღნაღის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ყვარლის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Kvareli.xlsx",
      },
    },
  };

  function updateLink(elementId, link) {
    const element = document.getElementById(elementId);
    if (element && link) {
      element.href = link;
    } else {
      console.error(
        `Link not found or invalid for element: ${elementId}, link: ${link}`
      );
    }
  }

  function getLink(type, pageName, lang) {
    return linkData[type][pageName] ? linkData[type][pageName][lang] : null;
  }

  function updateMunicipalityLinks() {
    const pageName = localStorage.getItem("municipal");
    const lang = getURLParameter("lang");

    const birthLink = getLink("births", pageName, lang);
    const ratioLink = getLink("ratio", pageName, lang);
    const ageMotherLink = getLink("ageMother", pageName, lang);
    const stillbirthLink = getLink("stillbirths", pageName, lang);
    const death4Link = getLink("deathagesex", pageName, lang);
    const death7Link = getLink("deathclases", pageName, lang);
    const agemarriageLink = getLink("agemarriage", pageName, lang);
    const meanagemarriageLink = getLink("meanagemarriage", pageName, lang);
    const numberdivorceLink = getLink("numberdivorce", pageName, lang);
    const populationDescription2Link = getLink(
      "populationDescription2",
      pageName,
      lang
    );
    const populationDescription3Link = getLink(
      "populationDescription3",
      pageName,
      lang
    );
    const populationDescription4Link = getLink(
      "populationDescription4",
      pageName,
      lang
    );
    const populationDescription5Link = getLink(
      "populationDescription5",
      pageName,
      lang
    );
    const populationDescription6Link = getLink(
      "populationDescription6",
      pageName,
      lang
    );
    const employmentAndSalariesLink2 = getLink(
      "employmentAndSalaries2",
      pageName,
      lang
    );
    const employmentAndSalariesLink3 = getLink(
      "employmentAndSalaries3",
      pageName,
      lang
    );
    const employmentAndSalariesLink4 = getLink(
      "employmentAndSalaries4",
      pageName,
      lang
    );
    const hotels5Link = getLink("hotels5", pageName, lang);
    const healthCareAndSocialSecurityLink11 = getLink(
      "healthCareAndSocialSecurity11",
      pageName,
      lang
    );
    const education3Link = getLink("education3", pageName, lang);
    const education4Link = getLink("education4", pageName, lang);

    updateLink("linkBirths", birthLink);
    updateLink("linkRatio", ratioLink);
    updateLink("motherAge", ageMotherLink);
    updateLink("linkStillbirths", stillbirthLink);
    updateLink("linkdeathagesex", death4Link);
    updateLink("linkdeathclases", death7Link);
    updateLink("linkagemarriage", agemarriageLink);
    updateLink("linkmeanagemarriage", meanagemarriageLink);
    updateLink("linknumberdivorce", numberdivorceLink);
    updateLink("linkpopulationDescription2", populationDescription2Link);
    updateLink("linkpopulationDescription3", populationDescription3Link);
    updateLink("linkpopulationDescription4", populationDescription4Link);
    updateLink("linkpopulationDescription5", populationDescription5Link);
    updateLink("linkpopulationDescription6", populationDescription6Link);
    updateLink("linkemploymentAndSalaries2", employmentAndSalariesLink2);
    updateLink("linkemploymentAndSalaries3", employmentAndSalariesLink3);
    updateLink("linkemploymentAndSalaries4", employmentAndSalariesLink4);
    updateLink("linkhotels5", hotels5Link);
    updateLink(
      "linkhealthCareAndSocialSecurity11",
      healthCareAndSocialSecurityLink11
    );
    updateLink("linkeducation3", education3Link);
    updateLink("linkeducation4", education4Link);
  }

  updateMunicipalityLinks();
});

window.onload = function () {
  const municipalValue = localStorage.getItem("municipal");

  // Check if municipal value exists
  if (municipalValue) {
    const urlParams = new URLSearchParams(window.location.search);
    const currentLang = urlParams.get("lang") || "ka"; // Default to "ka" if no lang is provided
    const currentUrl = window.location.href.split("?")[0]; // Get the current URL without query params

    // Create the new URL with both municipal and lang parameters
    const newUrl = `${currentUrl}?municipal=${municipalValue}&lang=${currentLang}`;

    // Redirect only if the current URL is different from the new one
    if (window.location.href !== newUrl) {
      window.location.href = newUrl; // Avoids infinite loop
    }
  }
};
