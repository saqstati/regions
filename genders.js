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
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Keda.xlsx",
      },
      xelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Khelvachauri.xlsx",
      },
      qobuleti: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Shuakhevi.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20live%20births%20by%20sex/Khulo.xlsx",
      },
    },
    ratio: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქედის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Keda.xlsx",
      },
      xelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხელვაჩაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khelvachauri.xlsx",
      },
      qobuleti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქობულეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/შუახევის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Shuakhevi.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხულოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khulo.xlsx",
      },
    },
    ageMother: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Keda.xlsx",
      },
      xelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Khelvachauri.xlsx",
      },
      qobuleti: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Shuakhevi.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20childbearing/Khulo.xlsx",
      },
    },
    stillbirths: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქედის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Keda.xlsx",
      },
      xelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხელვაჩაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khelvachauri.xlsx",
      },
      qobuleti: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქობულეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/შუახევის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Shuakhevi.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/ხულოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Sex%20ratio%20at%20birth/Khulo.xlsx",
      },
    },
    deathagesex: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Keda.xlsx",
      },
      xelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხელვაჩაური.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Khelvachauri.xlsx",
      },
      qobuleti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქობულეთი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/შუახევი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Shuakhevi.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ხულო.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Khulo.xlsx",
      },
    },
    deathclases: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქედის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Keda.xlsx",
      },
      xelvachauri: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხელვაჩაურის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Khelvachauri.xlsx",
      },
      qobuleti: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქობულეთის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kobuleti.xlsx",
      },
      Shuakhevi: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/შუახევის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Shuakhevi.xlsx",
      },
      Khulo: {
        ka: "/regions/municipal/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ხულოს%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Khulo.xlsx",
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

    updateLink("linkBirths", birthLink);
    updateLink("linkRatio", ratioLink);
    updateLink("motherAge", ageMotherLink);
    updateLink("linkStillbirths", stillbirthLink);
    updateLink("linkdeathagesex", death4Link);
    updateLink("linkdeathclases", death7Link);
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
