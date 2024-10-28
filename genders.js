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
    agemarriage: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20married%20people/Keda.xlsx",
      },
    },
    meanagemarriage: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Mean%20age%20of%20spouses/Keda.xlsx",
      },
    },
    numberdivorce: {
      batumi: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Demography/Number%20of%20registered%20divorces/Keda.xlsx",
      },
    },
    populationDescription2: {
      batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Median%20age%20of%20population/Keda.xlsx",
      },
    },
    populationDescription3: {
      batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Keda.xlsx",
      },
    },
    populationDescription4: {
      batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Age%20dependency%20ratios/Keda.xlsx",
      },
    },
    populationDescription5: {
      batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Number%20of%20population/Keda.xlsx",
      },
    },
    populationDescription6: {
      batumi: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქედა.xlsx",
        en: "/regions/municipal/ENG/Population%20census/Share%20of%20working%20age%20population/Keda.xlsx",
      },
    },
    employmentAndSalaries2: {
      batumi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/Keda.xlsx",
      },
    },
    employmentAndSalaries3: {
      batumi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/Keda.xlsx",
      },
    },
    employmentAndSalaries4: {
      batumi: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/Keda.xlsx",
      },
    },
    hotels5: {
      batumi: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/Keda%20Municipality.xlsx",
      },
    },
    healthCareAndSocialSecurity11: {
      batumi: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/სოციალური%20სტატისტიკა/აჭარა%20ა.რ/ქედის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Social%20Statistic/Adjara%20A.R/Keda.xlsx",
      },
    },
    education3: {
      batumi: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქედა.xlsx",
        en: "/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/Keda.xlsx",
      },
    },
    education4: {
      batumi: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Batumi.xlsx",
      },
      qeda: {
        ka: "/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქედის%20მუნიციპალიტეტი.xlsx",
        en: "/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/Keda.xlsx",
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
