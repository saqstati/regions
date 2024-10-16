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
    const stillbirthLink = getLink("stillbirths", pageName, lang);
    const death4Link = getLink("deathagesex", pageName, lang);
    const death7Link = getLink("deathclases", pageName, lang);

    updateLink("linkBirths", birthLink);
    updateLink("linkRatio", ratioLink);
    updateLink("linkStillbirths", stillbirthLink);
    updateLink("linkdeathagesex", death4Link);
    updateLink("linkdeathclases", death7Link);
  }

  updateMunicipalityLinks();
});
