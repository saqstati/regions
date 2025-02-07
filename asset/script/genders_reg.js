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
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20live%20births%20by%20sex/Shida%20Kartli.xlsx",
      },
    },
    ratio: {
      adjara: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/აჭარა.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/გურია.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/თბილისი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/იმერეთი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/კახეთი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/სქესთა%20რაოდენობრივი%20თანაფარდობა/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Quantitative%20ratio%20of%20sexes/Shida%20Kartli.xlsx",
      },
    },
    ageMother: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/გურია.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20childbearing/Shida%20Kartli.xlsx",
      },
    },
    stillbirths: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/გურია.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20stillbirths%20by%20sex/Shida%20Kartli.xlsx",
      },
    },
    deathagesex: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/გურია.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20age%20and%20sex/Shida%20Kartli.xlsx",
      },
    },
    deathclases: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/გურია.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/Shida%20Kartli.xlsx",
      },
    },
    agemarriage: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/გურია.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20married%20people/Shida%20Kartli.xlsx",
      },
    },
    meanagemarriage: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/გურია.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Mean%20age%20of%20spouses/Shida%20Kartli.xlsx",
      },
    },
    numberdivorce: {
      adjara: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/აჭარა.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/გურია.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/თბილისი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/იმერეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/კახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/Shida%20Kartli.xlsx",
      },
    },
    populationDescription2: {
      adjara: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/აჭარა.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/გურია.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/თბილისი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/იმერეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/კახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Median%20age%20of%20population/Shida%20Kartli.xlsx",
      },
    },
    populationDescription3: {
      adjara: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/აჭარა.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/გურია.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/თბილისი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/იმერეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/კახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/Shida%20Kartli.xlsx",
      },
    },
    populationDescription4: {
      adjara: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/აჭარა.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/გურია.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/თბილისი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/იმერეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/კახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Age%20dependency%20ratios/Shida%20Kartli.xlsx",
      },
    },
    populationDescription5: {
      adjara: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/აჭარა.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/გურია.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/თბილისი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/იმერეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/კახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Number%20of%20population/Shida%20Kartli.xlsx",
      },
    },
    populationDescription6: {
      adjara: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/აჭარა.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/გურია.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/თბილისი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/იმერეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/კახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Samtskhe-Javakheti.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Kvemo%20Kartli.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Population%20census/Share%20of%20working%20age%20population/Shida%20Kartli.xlsx",
      },
    },
    hotels5: {
      adjara: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/აჭარის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Adjara%20Region.xlsx",
      },
      guria: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/გურიის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Guria%20Region.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/თბილისი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/იმერეთის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Imereti%20Region.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/კახეთის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Kakheti%20Region.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/მცხეთა-მთიანეთის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Mtskheta-Mtianeti%20Region.xlsx",
      },
      Racha: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/რაჭა-ლეჩხუმისა%20და%20ქვემო%20სვანეთის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Racha-Lechkhumi%20and%20Kvemo%20Svaneti%20Region.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/სამეგრელო-ზემო%20სვანეთის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Samegrelo-Zemo%20Svaneti%20Region.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/სამცხე-ჯავახეთის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Samtskhe-Javakheti%20Region.xlsx",
      },
      kvemo_kartli: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/ქვემო%20ქართლის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Kvemo%20Kartli%20Region.xlsx",
      },
      shida_kartli: {
        ka: "/regions/regions/სასტუმროები/დასაქმებულთა%20რაოდენობა/შიდა%20ქართლის%20რეგიონი.xlsx",
        en: "/regions/regionseng/Hotels/Number%20of%20Employees/Shida%20Kartli%20Region.xlsx",
      },
    },
    healthCareAndSocialSecurity4: {
      adjara: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/აჭარა.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/გურია.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/იმერეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/კახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/აბორტები/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Abortions/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity7: {
      adjara: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/აჭარა.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/გურია.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/იმერეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/კახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/კიბო/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Cancer/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity8: {
      adjara: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/გურია.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/იმერეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/კახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/სისხლის%20მიმოქცევა/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Circulatory/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity9: {
      adjara: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/აჭარა.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/გურია.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/იმერეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/კახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/სუნთქვა/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Respiratory/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity10: {
      adjara: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/აჭარა.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/გურია.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/იმერეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/კახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/ათაშანგი/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Syphilis/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity11: {
      adjara: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/აჭარა.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/გურია.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/იმერეთი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/კახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/შიდსი/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/AIDS/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity12: {
      adjara: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/აჭარა.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/გურია.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/იმერეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/კახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/ჯანდაცვა/ტუბერკულიოზი/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Healthcare/Tuberculosis/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity15: {
      adjara: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/აჭარა.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/გურია.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/იმერეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/კახეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/მაჩვენებლები/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Indicators/Shida%20Kartli.xlsx",
      },
    },
    healthCareAndSocialSecurity20: {
      adjara: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Adjara.xlsx",
      },
      guria: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/გურია.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Guria.xlsx",
      },
      Tbilisi: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/ქ.%20თბილისი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/C.%20Tbilisi.xlsx",
      },
      imereti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/იმერეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Imereti.xlsx",
      },
      Kakheti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/კახეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Kakheti.xlsx",
      },
      mtskheta_mtianeti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/მცხეთა-მთიანეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Mtskheta-Mtianeti.xlsx",
      },
      Racha: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/რაჭა-ლეჩხუმი%20და%20ქვემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Racha-Lechkhumi%20and%20Kvemo%20Svaneti.xlsx",
      },
      Samegrelo: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/სამეგრელო-ზემო%20სვანეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Samegrelo-Zemo%20Svaneti.xlsx",
      },
      samtskhe_javakheti: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/სამცხე-ჯავახეთი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Samtskhe-Javakheti.xlsx",
      },
      kvemo_Kartli: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/ქვემო%20ქართლი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Kvemo%20Kartli.xlsx",
      },
      shida_Kartli: {
        ka: "/regions/regions/სოციალური%20სტატისტიკა/ბენეფიციართა/შიდა%20ქართლი.xlsx",
        en: "/regions/regionseng/Social%20Statistic/Beneficiaries/Shida%20Kartli.xlsx",
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
    const hotels5Link = getLink("hotels5", pageName, lang);
    const healthCareAndSocialSecurity4Link = getLink(
      "healthCareAndSocialSecurity4",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity7Link = getLink(
      "healthCareAndSocialSecurity7",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity8Link = getLink(
      "healthCareAndSocialSecurity8",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity9Link = getLink(
      "healthCareAndSocialSecurity9",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity10Link = getLink(
      "healthCareAndSocialSecurity10",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity11Link = getLink(
      "healthCareAndSocialSecurity11",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity12Link = getLink(
      "healthCareAndSocialSecurity12",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity15Link = getLink(
      "healthCareAndSocialSecurity15",
      pageName,
      lang
    );
    const healthCareAndSocialSecurity20Link = getLink(
      "healthCareAndSocialSecurity20",
      pageName,
      lang
    );

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
    updateLink("linkhotels5", hotels5Link);
    updateLink(
      "linkhealthCareAndSocialSecurity4",
      healthCareAndSocialSecurity4Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity7",
      healthCareAndSocialSecurity7Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity8",
      healthCareAndSocialSecurity8Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity9",
      healthCareAndSocialSecurity9Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity10",
      healthCareAndSocialSecurity10Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity11",
      healthCareAndSocialSecurity11Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity12",
      healthCareAndSocialSecurity12Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity15",
      healthCareAndSocialSecurity15Link
    );
    updateLink(
      "linkhealthCareAndSocialSecurity20",
      healthCareAndSocialSecurity20Link
    );
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
