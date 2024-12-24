document.addEventListener("DOMContentLoaded", function () {
  function getURLParameter(name) {
    const regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
    const results = regex.exec(location.search);
    return results ? decodeURIComponent(results[1].replace(/\+/g, " ")) : "";
  }

  const linkData = {
    births: {
      Batumi: {
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
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ცაგერი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქედის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/აბაშის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მესტიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სენაკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ფოთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჩხოროწყუს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წალენჯიხის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ასპინძის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახალქალაქის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახალციხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბორჯომის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ნინოწმინდის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/თერჯოლის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/სამტრედიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/საჩხერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ტყიბულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ქუთაისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წყალტუბოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ჭიათურის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ცაგერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ბოლნისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/გარდაბნის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20რუსთავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/წალკის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/მცხეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ყაზბეგის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20თბილისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ახმეტის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ყვარლის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ცაგერი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti/Kvareli.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ცაგერი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქედის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/აბაშის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/მესტიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სენაკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20ფოთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ჩხოროწყუს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/წალენჯიხის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ასპინძის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ახალქალაქის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ახალციხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ბორჯომის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ნინოწმინდის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თერჯოლის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სამტრედიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/საჩხერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ტყიბულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20ქუთაისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/წყალტუბოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ჭიათურის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ცაგერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ბოლნისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/გარდაბნის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20რუსთავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/წალკის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/მცხეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ყაზბეგის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20თბილისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ახმეტის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ყვარლის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ცაგერი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ცაგერი.xlsx",
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
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/მესტია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ხობი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ვანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ხონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ონი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/წალკა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/გორი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/კასპი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/თელავი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kvareli.xlsx",
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
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ცაგერი.xlsx",
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
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ცაგერი.xlsx",
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
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხულო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მესტია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხობი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ვანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ონი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/წალკა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გორი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/კასპი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Kazbegi.xlsx",
      },
      Tbilisi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თბილისი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Tbilisi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თელავი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Kvareli.xlsx",
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
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ცაგერი.xlsx",
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
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ცაგერი.xlsx",
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
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Kakheti/Kvareli.xlsx",
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
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Kakheti/Kvareli.xlsx",
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
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Kakheti/Kvareli.xlsx",
      },
    },
    hotels5: {
      Batumi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx",
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
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Abasha%20Municipality.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Zugdidi%20Municipality.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Martvili%20Municipality.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Mestia%20Municipality.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Senaki%20Municipality.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Chkhorotsku%20Municipality.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Tsalenjikha%20Municipality.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samegrelo-Zemo%20Svaneti/Khobi%20Municipality.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Guria/Lanchkhuti%20Municipality.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Guria/Ozurgeti%20Municipality.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Guria/Chokhatauri%20Municipality.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samtskhe-Javakheti/Adigeni%20Municipality.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samtskhe-Javakheti/Aspindza%20Municipality.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samtskhe-Javakheti/Akhalkalaki%20Municipality.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samtskhe-Javakheti/Akhaltsikhe%20Municipality.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samtskhe-Javakheti/Borjomi%20Municipality.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Samtskhe-Javakheti/Ninotsminda%20Municipality.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Baghdati%20Municipality.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Vani%20Municipality.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Zestaponi%20Municipality.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Terjola%20Municipality.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Samtredia%20Municipality.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Sachkhere%20Municipality.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Tkibuli%20Municipality.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Tskaltubo%20Municipality.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Chiatura%20Municipality.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Kharagauli%20Municipality.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Imereti/Khoni%20Municipality.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri%20Municipality.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi%20Municipality.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni%20Municipality.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri%20Municipality.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kvemo%20Kartli/Bolnisi%20Municipality.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kvemo%20Kartli/Gardabani%20Municipality.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kvemo%20Kartli/Dmanisi%20Municipality.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kvemo%20Kartli/Tetritskaro%20Municipality.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kvemo%20Kartli/Marneuli%20Municipality.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kvemo%20Kartli/Tsalka%20Municipality.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Shida%20Kartli/Gori%20Municipality.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Shida%20Kartli/Kaspi%20Municipality.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Shida%20Kartli/Kareli%20Municipality.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Shida%20Kartli/Khashuri%20Municipality.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Mtskheta-Mtianeti/Dusheti%20Municipality.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Mtskheta-Mtianeti/Tianeti%20Municipality.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Mtskheta-Mtianeti/Mtskheta%20Municipality.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Mtskheta-Mtianeti/Kazbegi%20Municipality.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Akhmeta%20Municipality.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Gurjaani%20Municipality.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Dedoplistskaro%20Municipality.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Telavi%20Municipality.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Lagodekhi%20Municipality.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Sagarejo%20Municipality.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Sighnaghi%20Municipality.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Kakheti/Kvareli%20Municipality.xlsx",
      },
    },
    healthCareAndSocialSecurity4: {
      Batumi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/ჯანდაცვა/აბორტები/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Abortions/Kakheti/Kvareli.xlsx",
      },
    },
    healthCareAndSocialSecurity7: {
      Batumi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/ჯანდაცვა/კიბო/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Cancer/Kakheti/Kvareli.xlsx",
      },
    },
    healthCareAndSocialSecurity8: {
      Batumi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Circulatory/Kakheti/Kvareli.xlsx",
      },
    },
    healthCareAndSocialSecurity9: {
      Batumi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/ჯანდაცვა/სუნთქვა/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Respiratory/Kakheti/Kvareli.xlsx",
      },
    },
    healthCareAndSocialSecurity10: {
      Batumi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/ჯანდაცვა/ათაშანგი/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Syphilis/Kakheti/Kvareli.xlsx",
      },
    },
    healthCareAndSocialSecurity11: {
      Batumi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/ჯანდაცვა/შიდსი/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/AIDS/Kakheti/Kvareli.xlsx",
      },
    },
    healthCareAndSocialSecurity12: {
      Batumi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Healthcare/Tuberculosis/Kakheti/Kvareli.xlsx",
      },
    },
    healthCareAndSocialSecurity20: {
      Batumi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/Keda.xlsx",
      },
      Kobuleti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/Shuakhevi.xlsx",
      },
      Khelvachauri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/Khelvachauri.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/ხულო.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/Khulo.xlsx",
      },
      Abasha: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Kakheti/Kvareli.xlsx",
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
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/აბაშა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ზუგდიდი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/მარტვილი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/მესტია.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/სენაკი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუ.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/წალენჯიხა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ხობი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/გურია/ლანჩხუთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/გურია/ოზურგეთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/გურია/ჩოხატაური.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ადიგენი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ასპინძა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ახალქალაქი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ახალციხე.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ბორჯომი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ნინოწმინდა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ბაღდათი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ვანი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ზესტაფონი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/თერჯოლა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/სამტრედია.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/საჩხერე.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ტყიბული.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/წყალტუბო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ჭიათურა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ხარაგაული.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/იმერეთი/ხონი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაური.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/ბოლნისი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/გარდაბანი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/დმანისი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/თეთრიწყარო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/მარნეული.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/წალკა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/გორი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/კასპი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/ქარელი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/ხაშური.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/დუშეთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/თიანეთი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/მცხეთა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/ყაზბეგი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/ახმეტა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/გურჯაანი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/დედოფლისწყარო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/თელავი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/ლაგოდეხი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/საგარეჯო.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/სიღნაღი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/კახეთი/ყვარელი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Kakheti/Kvareli.xlsx",
      },
    },
    education4: {
      Batumi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Batumi.xlsx",
      },
      Keda: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქედის%20მუნიციპალიტეტი.xlsx",
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
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/აბაშის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Abasha.xlsx",
      },
      Zugdidi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ზუგდიდის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Zugdidi.xlsx",
      },
      Martvili: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/მარტვილის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Martvili.xlsx",
      },
      Mestia: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/მესტიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Mestia.xlsx",
      },
      Senaki: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/სენაკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Senaki.xlsx",
      },
      Poti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ქ.%20ფოთი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/C.%20Poti.xlsx",
      },
      Chkhorotsku: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ჩხოროწყუს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Chkhorotsku.xlsx",
      },
      Tsalenjikha: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/წალენჯიხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Tsalenjikha.xlsx",
      },
      Khobi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამეგრელო-ზემო%20სვანეთი/ხობის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samegrelo-Zemo%20Svaneti/Khobi.xlsx",
      },
      Lanchkhuti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/გურია/ლანჩხუთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Guria/Lanchkhuti.xlsx",
      },
      Ozurgeti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/გურია/ოზურგეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Guria/Ozurgeti.xlsx",
      },
      Chokhatauri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/გურია/ჩოხატაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Guria/Chokhatauri.xlsx",
      },
      Adigeni: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ადიგენის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samtskhe-Javakheti/Adigeni.xlsx",
      },
      Aspindza: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ასპინძის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samtskhe-Javakheti/Aspindza.xlsx",
      },
      Akhalkalaki: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ახალქალაქის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samtskhe-Javakheti/Akhalkalaki.xlsx",
      },
      Akhaltsikhe: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ახალციხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samtskhe-Javakheti/Akhaltsikhe.xlsx",
      },
      Borjomi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ბორჯომის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samtskhe-Javakheti/Borjomi.xlsx",
      },
      Ninotsminda: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/სამცხე-ჯავახეთი/ნინოწმინდის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Samtskhe-Javakheti/Ninotsminda.xlsx",
      },
      Baghdati: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ბაღდათის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Baghdati.xlsx",
      },
      Vani: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ვანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Vani.xlsx",
      },
      Zestaponi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ზესტაფონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Zestaponi.xlsx",
      },
      Terjola: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/თერჯოლის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Terjola.xlsx",
      },
      Samtredia: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/სამტრედიის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Samtredia.xlsx",
      },
      Sachkhere: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/საჩხერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Sachkhere.xlsx",
      },
      Tkibuli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ტყიბულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Tkibuli.xlsx",
      },
      Kutaisi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ქ.%20ქუთაისი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/C.%20Kutaisi.xlsx",
      },
      Tskaltubo: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/წყალტუბოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Tskaltubo.xlsx",
      },
      Chiatura: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ჭიათურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Chiatura.xlsx",
      },
      Kharagauli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ხარაგაულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Kharagauli.xlsx",
      },
      Khoni: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/იმერეთი/ხონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Imereti/Khoni.xlsx",
      },
      Ambrolauri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ამბროლაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Ambrolauri.xlsx",
      },
      Lentekhi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ლენტეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Lentekhi.xlsx",
      },
      Oni: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ონის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Oni.xlsx",
      },
      Tsageri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი/ცაგერის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti/Tsageri.xlsx",
      },
      Bolnisi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/ბოლნისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kvemo%20Kartli/Bolnisi.xlsx",
      },
      Gardabani: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/გარდაბნის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kvemo%20Kartli/Gardabani.xlsx",
      },
      Dmanisi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/დმანისის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kvemo%20Kartli/Dmanisi.xlsx",
      },
      Tetritskaro: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/თეთრიწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kvemo%20Kartli/Tetritskaro.xlsx",
      },
      Marneuli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/მარნეულის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kvemo%20Kartli/Marneuli.xlsx",
      },
      Rustavi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/ქ.%20რუსთავი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kvemo%20Kartli/C.%20Rustavi.xlsx",
      },
      Tsalka: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/ქვემო%20ქართლი/წალკის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kvemo%20Kartli/Tsalka.xlsx",
      },
      Gori: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/გორის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Shida%20Kartli/Gori.xlsx",
      },
      Kaspi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/კასპის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Shida%20Kartli/Kaspi.xlsx",
      },
      Kareli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/ქარელის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Shida%20Kartli/Kareli.xlsx",
      },
      Khashuri: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/შიდა%20ქართლი/ხაშურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Shida%20Kartli/Khashuri.xlsx",
      },
      Dusheti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/დუშეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Mtskheta-Mtianeti/Dusheti.xlsx",
      },
      Tianeti: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/თიანეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Mtskheta-Mtianeti/Tianeti.xlsx",
      },
      Mtskheta: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/მცხეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Mtskheta-Mtianeti/Mtskheta.xlsx",
      },
      Kazbegi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/მცხეთა-მთიანეთი/ყაზბეგის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Mtskheta-Mtianeti/Kazbegi.xlsx",
      },
      Akhmeta: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/ახმეტის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Akhmeta.xlsx",
      },
      Gurjaani: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/გურჯაანის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Gurjaani.xlsx",
      },
      Dedoplistskaro: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/დედოფლისწყაროს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Dedoplistskaro.xlsx",
      },
      Telavi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/თელავის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Telavi.xlsx",
      },
      Lagodekhi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/ლაგოდეხის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Lagodekhi.xlsx",
      },
      Sagarejo: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/საგარეჯოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Sagarejo.xlsx",
      },
      Sighnaghi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/სიღნაღის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Sighnaghi.xlsx",
      },
      Kvareli: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/კახეთი/ყვარლის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Kakheti/Kvareli.xlsx",
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
    const healthCareAndSocialSecurityLink4 = getLink(
      "healthCareAndSocialSecurity4",
      pageName,
      lang
    );
    const healthCareAndSocialSecurityLink7 = getLink(
      "healthCareAndSocialSecurity7",
      pageName,
      lang
    );
    const healthCareAndSocialSecurityLink8 = getLink(
      "healthCareAndSocialSecurity8",
      pageName,
      lang
    );
    const healthCareAndSocialSecurityLink9 = getLink(
      "healthCareAndSocialSecurity9",
      pageName,
      lang
    );
    const healthCareAndSocialSecurityLink10 = getLink(
      "healthCareAndSocialSecurity10",
      pageName,
      lang
    );
    const healthCareAndSocialSecurityLink11 = getLink(
      "healthCareAndSocialSecurity11",
      pageName,
      lang
    );
    const healthCareAndSocialSecurityLink12 = getLink(
      "healthCareAndSocialSecurity12",
      pageName,
      lang
    );
    const healthCareAndSocialSecurityLink20 = getLink(
      "healthCareAndSocialSecurity20",
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
      "linkhealthCareAndSocialSecurity4",
      healthCareAndSocialSecurityLink4
    );
    updateLink(
      "linkhealthCareAndSocialSecurity7",
      healthCareAndSocialSecurityLink7
    );
    updateLink(
      "linkhealthCareAndSocialSecurity8",
      healthCareAndSocialSecurityLink8
    );
    updateLink(
      "linkhealthCareAndSocialSecurity9",
      healthCareAndSocialSecurityLink9
    );
    updateLink(
      "linkhealthCareAndSocialSecurity10",
      healthCareAndSocialSecurityLink10
    );
    updateLink(
      "linkhealthCareAndSocialSecurity11",
      healthCareAndSocialSecurityLink11
    );
    updateLink(
      "linkhealthCareAndSocialSecurity12",
      healthCareAndSocialSecurityLink12
    );
    updateLink(
      "linkhealthCareAndSocialSecurity20",
      healthCareAndSocialSecurityLink20
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
