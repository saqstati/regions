document.addEventListener("DOMContentLoaded", function () {
  function getURLParameter(name) {
    const regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
    const results = regex.exec(location.search);
    return results ? decodeURIComponent(results[1].replace(/\+/g, " ")) : "ka";
  }

  const linkData = {
    births: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/გურია.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Guria.xlsx",
      },
      tbilisi: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Imereti.xlsx",
      },
      kakheti: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Kakheti.xlsx",
      },
      mtskheta: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Mtskheta-Mtianeti.xlsx",
      },
      racha: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      samegrelo: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      javakheti: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Shida%20Kartli.xlsx",
      },
    },
    ratio: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Adjara.xlsx",
      },
    },
  };

  function updateLink(elementId, link) {
    const element = document.getElementById(elementId);
    if (element && link) {
      element.href = link;
    } else {
      console.error(`Link not found for element: ${elementId}, link: ${link}`);
    }
  }

  function getLink(type, pageName, lang) {
    return linkData[type]?.[pageName]?.[lang] || null;
  }

  console.log("Linkdata: ", linkData);

  function updateMunicipalityLinks() {
    const pageName = localStorage.getItem("region");
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
  const regionValue = localStorage.getItem("region");

  if (regionValue) {
    const urlParams = new URLSearchParams(window.location.search);
    const currentLang = urlParams.get("lang") || "ka";
    const currentUrl = window.location.href.split("?")[0];

    urlParams.set("region", regionValue);
    urlParams.set("lang", currentLang);

    const newUrl = `${currentUrl}?${urlParams.toString()}`;

    if (window.location.href !== newUrl) {
      window.location.href = newUrl;
    }
  }
};
