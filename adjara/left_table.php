<!-- Left Table -->
<div class="col-12 col-md-3">
    <table class="table">
        <?php
        include('../connection.php');

        // Ensure config is loaded for language support
        if (!isset($lang)) {
            include('../config.php');
        }

        // Determine language code for paths and table selection
        $lang_code = (isset($_GET['lang']) && $_GET['lang'] == 'en') ? 'en' : 'ka';
        $table = ($lang_code == 'en') ? 'municipal_statistics_en' : 'municipal_statistics';

        // Detect which municipality this is for based on the current page
        $current_page = basename($_SERVER['PHP_SELF']);
        $municipal_info = [];

        if (strpos($current_page, 'batumi') !== false) {
            $municipal_info = [
                'en_name' => 'C. Batumi',
                'en_full' => 'C. Batumi Municipality',
                'en_short' => 'C. Batumi', // used in some paths
                'ka_name' => 'ქ. ბათუმი',
                'ka_full' => 'ქ. ბათუმის მუნიციპალიტეტი',
                'ka_short' => 'ბათუმი' // used when "ქ." prefix causes issues
            ];
        } elseif (strpos($current_page, 'qeda') !== false || strpos($current_page, 'keda') !== false) {
            $municipal_info = [
                'en_name' => 'Keda',
                'en_full' => 'Keda Municipality',
                'en_short' => 'Keda',
                'ka_name' => 'ქედა',
                'ka_full' => 'ქედის მუნიციპალიტეტი',
                'ka_short' => 'ქედა'
            ];
        } else {
            // Fallback
            $municipal_info = [
                'en_name' => 'C. Batumi',
                'en_full' => 'C. Batumi Municipality',
                'en_short' => 'C. Batumi',
                'ka_name' => 'ქ. ბათუმი',
                'ka_full' => 'ქ. ბათუმის მუნიციპალიტეტი',
                'ka_short' => 'ბათუმი'
            ];
        }

        // Fetch data
        $query = mysqli_query($link, "SELECT * FROM `$table`");
        $basicInformation = $populationCensus = $Population = $birth = $death = $naturalIncrease =
            $marriage = $divorce = $populationDescription = $employmentAndSalaries = $businessSector =
            $businessRegister = $accordingToTheTypesOfActivities = $AccordingToTheFormsOfOwnership =
            $accordingToOrganizationalLegalForms = $budget = $agriculture = $construction = $trading =
            $hotels = $transportAndStorage = $healthCareAndSocialSecurity = $education = $culture = [];

        while ($row = mysqli_fetch_array($query)) {
            $basicInformation[$row['ID']] = $row['basicInformation'];
            $populationCensus[$row['ID']] = $row['populationCensus'];
            $Population[$row['ID']] = $row['Population'];
            $birth[$row['ID']] = $row['birth'];
            $death[$row['ID']] = $row['death'];
            $naturalIncrease[$row['ID']] = $row['naturalIncrease'];
            $marriage[$row['ID']] = $row['marriage'];
            $divorce[$row['ID']] = $row['divorce'];
            $populationDescription[$row['ID']] = $row['populationDescription'];
            $employmentAndSalaries[$row['ID']] = $row['employmentAndSalaries'];
            $businessSector[$row['ID']] = $row['businessSector'];
            $businessRegister[$row['ID']] = $row['businessRegister'];
            $accordingToTheTypesOfActivities[$row['ID']] = $row['accordingToTheTypesOfActivities'];
            $AccordingToTheFormsOfOwnership[$row['ID']] = $row['AccordingToTheFormsOfOwnership'];
            $accordingToOrganizationalLegalForms[$row['ID']] = $row['accordingToOrganizationalLegalForms'];
            $budget[$row['ID']] = $row['budget'];
            $agriculture[$row['ID']] = $row['agriculture'];
            $construction[$row['ID']] = $row['construction'];
            $trading[$row['ID']] = $row['trading'];
            $hotels[$row['ID']] = $row['hotels'];
            $transportAndStorage[$row['ID']] = $row['transportAndStorage'];
            $healthCareAndSocialSecurity[$row['ID']] = $row['healthCareAndSocialSecurity'];
            $education[$row['ID']] = $row['education'];
            $culture[$row['ID']] = $row['culture'];
        }

        // Helper function to generate dynamic municipality paths
        // Helper: dynamic path generator
        function getExcelPath($key, $municipal_info, $lang_code)
        {
            $base = '/regions/municipal/';

            $en = $municipal_info['en_name'];
            $enShort = $municipal_info['en_short'];

            $ka = $municipal_info['ka_name'];
            $kaSafe = (strpos($ka, 'ქ.') !== false) ? $municipal_info['ka_short'] : $ka;

            $map = [

                /* =======================
         * MAIN INFORMATION
         * ======================= */
                'main_info_area' => [
                    'en' => "ENG/Main%20Information/Municipality%20area/{$municipal_info['en_full']}",
                    'ka' => "ძირითადი%20ინფორმაცია/მუნიციპალიტეტის%20ფართობი/{$ka}"
                ],
                'main_info_admin' => [
                    'en' => "ENG/Main%20Information/Administrative%20structure/Adjara%20A.R/{$enShort}",
                    'ka' => "ძირითადი%20ინფორმაცია/ადმინისტრაციული%20მოწყობა/აჭარა%20ა.რ/{$ka}"
                ],

                /* =======================
         * POPULATION CENSUS (PRE)
         * ======================= */
                'pop_urban_rural' => [
                    'en' => "ENG/Population%20census%20pre/urban-rural%20settlements/Adjara%20A.R/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა%20წინასწარი/მოსახლეობა%20საქალაქო-სასოფლო/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'pop_by_sex' => [
                    'en' => "ENG/Population%20census%20pre/number%20of%20population%20by%20sex/Adjara%20A.R/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა%20წინასწარი/მოსახლეობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * POPULATION
         * ======================= */
                'population_number' => [
                    'en' => "ENG/Population/Number%20of%20population/{$en}",
                    'ka' => "მოსახლეობა/მოსახლეობის%20რიცხოვნობა%20საქალაქო-სასოფლო%20დასახლებების%20მიხედვით/{$ka}"
                ],
                'population_urban_share' => [
                    'en' => "ENG/Population/Share%20of%20urban%20population/{$en}",
                    'ka' => "მოსახლეობა/საქალაქო%20დასახლებაში%20მცხოვრები%20მოსახლეობის%20წილი/{$ka}"
                ],
                'population_density' => [
                    'en' => "ENG/Population/Density%20of%20population/{$en}",
                    'ka' => "მოსახლეობა/მოსახლეობის%20სიმჭიდროვე/{$ka}"
                ],

                /* =======================
         * DEMOGRAPHY – BIRTH
         * ======================= */
                'birth_live' => [
                    'en' => "ENG/Demography/Number%20of%20live%20births/{$en}",
                    'ka' => "დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა/{$ka}"
                ],
                'birth_rate' => [
                    'en' => "ENG/Demography/Crude%20birth%20rate/{$en}",
                    'ka' => "დემოგრაფია/შობადობის%20ზოგადი%20კოეფიციენტი/{$ka}"
                ],
                'birth_by_sex' => [
                    'en' => "ENG/Demography/Number%20of%20live%20births%20by%20sex/{$en}",
                    'ka' => "დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/{$ka}"
                ],
                'birth_sex_ratio' => [
                    'en' => "ENG/Demography/Sex%20ratio%20at%20birth/{$en}",
                    'ka' => "დემოგრაფია/სქესთა%20რაოდენობრივი%20თანაფარდობა/{$municipal_info['ka_full']}"
                ],
                'birth_mean_age' => [
                    'en' => "ENG/Demography/Mean%20age%20of%20childbearing/{$en}",
                    'ka' => "დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/{$kaSafe}"
                ],

                /* =======================
         * DEMOGRAPHY – DEATH
         * ======================= */
                'death_total' => [
                    'en' => "ENG/Demography/Number%20of%20deaths/{$en}",
                    'ka' => "დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/{$kaSafe}"
                ],
                'death_rate' => [
                    'en' => "ENG/Demography/Crude%20death%20rate/{$en}",
                    'ka' => "დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/{$kaSafe}"
                ],

                /* =======================
         * NATURAL INCREASE
         * ======================= */
                'natural_increase' => [
                    'en' => "ENG/Demography/Natural%20increase/{$en}",
                    'ka' => "დემოგრაფია/ბუნებრივი%20მატება/{$kaSafe}"
                ],
                'natural_increase_rate' => [
                    'en' => "ENG/Demography/Natural%20increase%20rate/{$en}",
                    'ka' => "დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/{$kaSafe}"
                ],

                /* =======================
         * MARRIAGE
         * ======================= */
                'marriage_total' => [
                    'en' => "ENG/Demography/Number%20of%20registered%20marriages/{$en}",
                    'ka' => "დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/{$kaSafe}"
                ],
                'marriage_rate' => [
                    'en' => "ENG/Demography/Crude%20marriage%20rate/{$en}",
                    'ka' => "დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/{$kaSafe}"
                ],

                /* =======================
         * DIVORCE
         * ======================= */
                'divorce_total' => [
                    'en' => "ENG/Demography/Number%20of%20registered%20divorces/{$en}",
                    'ka' => "დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/{$kaSafe}"
                ],
                'divorce_rate' => [
                    'en' => "ENG/Demography/Crude%20divorce%20rate/{$en}",
                    'ka' => "დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/{$kaSafe}"
                ],
                'divorce_divorced_people' => [
                    'en' => "ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/{$en}",
                    'ka' => "დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/{$kaSafe}"
                ],
                'divorce_rate' => [
                    'en' => "ENG/Demography/Crude%20divorce%20rate/{$en}",
                    'ka' => "დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/{$kaSafe}"
                ],

                /* =======================
         * EMPLOYMENT & SALARIES
         * ======================= */
                'employment_employed' => [
                    'en' => "ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/{$en}",
                    'ka' => "დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'employment_employees' => [
                    'en' => "ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/{$en}",
                    'ka' => "დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'employment_salary' => [
                    'en' => "ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/{$en}",
                    'ka' => "დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * POPULATION CENSUS
         * ======================= */
                'pop_census_median_age' => [
                    'en' => "ENG/Population%20census/Median%20age%20of%20population/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/{$kaSafe}"
                ],
                'pop_census_over_65' => [
                    'en' => "ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/{$kaSafe}"
                ],
                'pop_census_age_dependency' => [
                    'en' => "ENG/Population%20census/Age%20dependency%20ratios/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/{$kaSafe}"
                ],
                'pop_census_population_number' => [
                    'en' => "ENG/Population%20census/Number%20of%20population/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/{$kaSafe}"
                ],
                'pop_census_working_age' => [
                    'en' => "ENG/Population%20census/Share%20of%20working%20age%20population/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/{$kaSafe}"
                ],
                'pop_census_households' => [
                    'en' => "ENG/Population%20census/Number%20of%20private%20households/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/{$kaSafe}"
                ],

                /* =======================
         * BIRTH - ADDITIONAL
         * ======================= */
                'birth_by_sex' => [
                    'en' => "ENG/Demography/Number%20of%20live%20births%20by%20sex/{$en}",
                    'ka' => "დემოგრაფია/ცოცხლად%20დაბადებულთა%20რიცხოვნობა%20სქესის%20მიხედვით/{$kaSafe}"
                ],

                /* =======================
         * DEATH - ADDITIONAL
         * ======================= */
                'death_suicide_rate' => [
                    'en' => "ENG/Demography/Suicide%20rate/{$en}",
                    'ka' => "დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/{$kaSafe}"
                ],

                /* =======================
         * BUSINESS - ADDITIONAL
         * ======================= */
                'business_investments_fixed' => [
                    'en' => "ENG/Business%20Sector/Investments%20in%20fixed%20assets/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/ინვესტიციები/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * DEMOGRAPHY - ADDITIONAL BIRTH
         * ======================= */
                'birth_stillbirths' => [
                    'en' => "ENG/Demography/Number%20of%20stillbirths/{$en}",
                    'ka' => "დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/{$kaSafe}"
                ],
                'birth_stillbirths_by_sex' => [
                    'en' => "ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/{$en}",
                    'ka' => "დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * DEMOGRAPHY - ADDITIONAL DEATH
         * ======================= */
                'death_by_age_sex' => [
                    'en' => "ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/{$en}",
                    'ka' => "დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/{$kaSafe}"
                ],
                'death_infant_rate' => [
                    'en' => "ENG/Demography/Infant%20mortality%20rate/{$en}",
                    'ka' => "დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/{$kaSafe}"
                ],
                'death_under5_rate' => [
                    'en' => "ENG/Demography/Under-5%20mortality%20rate/{$en}",
                    'ka' => "დემოგრაფია/5%20წლამდე%20ასაკის%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/{$municipal_info['ka_full']}"
                ],
                'death_by_causes_sex' => [
                    'en' => "ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20sex/{$en}",
                    'ka' => "დემოგრაფია/გარდაცვალების%20მიზეზები%20სქესის%20მიხედვით/{$municipal_info['ka_full']}"
                ],
                'death_by_causes_urban' => [
                    'en' => "ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20urban-rural%20settlements/{$en}",
                    'ka' => "დემოგრაფია/გარდაცვალების%20მიზეზები%20საქალაქო%20სასოფლო/{$municipal_info['ka_full']}"
                ],
                'death_by_causes_age' => [
                    'en' => "ENG/Demography/Number%20of%20deaths%20by%20chapters%20of%20ICD-10%20and%20by%20age%20groups/{$en}",
                    'ka' => "დემოგრაფია/მიზეზები%20ძირითადი%20კლასების%20და%20ასაკის%20მიხედვით/{$municipal_info['ka_full']}"
                ],
                'death_suicide' => [
                    'en' => "ENG/Demography/Deaths%20from%20suicide/{$en}",
                    'ka' => "დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/{$kaSafe}"
                ],
                'death_suicide_rate' => [
                    'en' => "ENG/Demography/Suicide%20rate/{$en}",
                    'ka' => "დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/{$kaSafe}"
                ],

                /* =======================
         * MARRIAGE - ADDITIONAL
         * ======================= */
                'marriage_married_people' => [
                    'en' => "ENG/Demography/Number%20of%20married%20people/{$en}",
                    'ka' => "დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/{$kaSafe}"
                ],
                'marriage_mean_age' => [
                    'en' => "ENG/Demography/Mean%20age%20of%20spouses/{$en}",
                    'ka' => "დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/{$kaSafe}"
                ],

                /* =======================
         * BUSINESS SECTOR
         * ======================= */
                'business_turnover' => [
                    'en' => "ENG/Business%20Sector/turnover/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/ბრუნვა/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'business_production' => [
                    'en' => "ENG/Business%20Sector/Production%20Value/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/პროდუქციის%20გამოშვება/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'business_personnel_costs' => [
                    'en' => "ENG/Business%20Sector/Pesronal%20Costs/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/შრომითი%20დანახარჯები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'business_purchases' => [
                    'en' => "ENG/Business%20Sector/Purchase%20of%20good%20and%20services/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/საქონლისა%20და%20მომსახურების%20ყიდვები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'business_purchases_resale' => [
                    'en' => "ENG/Business%20Sector/Purchase%20of%20good%20and%20services%20for%20resale/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/გადასაყიდად%20განკუთვნილი%20საქონლისა%20და%20მომსახურების%20ყიდვები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'business_value_added' => [
                    'en' => "ENG/Business%20Sector/Value%20added/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/დამატებული%20ღირებულება/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'business_intermediate' => [
                    'en' => "ENG/Business%20Sector/Intermediate%20consumption/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/შუალედური%20მოხმარება/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'business_investment' => [
                    'en' => "ENG/Business%20Sector/Investment%20in%20fixed%20assets/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/ინვესტიცია%20ძირითად%20კაპიტალში/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * BUDGET
         * ======================= */
                'budget_main' => [
                    'en' => "ENG/Budget/Adjara%20A.R/{$en}",
                    'ka' => "ბიუჯეტი/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * CONSTRUCTION
         * ======================= */
                'construction_permissions' => [
                    'en' => "ENG/Construction/Permissions%20granted/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "მშენებლობა/მშენებლობაზე%20გაცემული%20ნებართვები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'construction_completed' => [
                    'en' => "ENG/Construction/Completed%20Construction/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "მშენებლობა/დასრულებული%20მშენებლობა/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * TRADING
         * ======================= */
                'trading_markets_legal' => [
                    'en' => "ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20organizational%20legal%20forms%20in%20Georgia/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ორგანიზაციულ-სამართლებლივი%20ფორმების%20მიხედვით/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'trading_markets_ownership' => [
                    'en' => "ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20ownership%20type%20in%20Georgia/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20საკუთრების%20ფორმის%20მიხედვით/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'trading_markets_type' => [
                    'en' => "ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20type%20in%20Georgia/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ტიპების%20მიხედვით/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'trading_markets_days' => [
                    'en' => "ENG/Trading/Number%20of%20markets%20and%20fairs%20on%20days%20of%20trade/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ვაჭრობის%20დღეთა%20მიხედვით/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'trading_employed' => [
                    'en' => "ENG/Trading/Average%20annual%20number%20of%20employed%20persons/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრების%20და%20ბაზრობების%20დირექციებში%20დასაქმებულთა%20რაოდენობა/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'trading_sellers' => [
                    'en' => "ENG/Trading/Number%20of%20market-place%20and%20sellers%20on%20the%20markets%20and%20fairs/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრებში%20და%20ბაზრობებში%20სავაჭრო%20ადგილების%20და%20მოვაჭრეთა%20რაოდენობა/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'trading_financial' => [
                    'en' => "ENG/Trading/Financial%20indices%20of%20markets%20and%20fairs/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრების%20და%20ბაზრობების%20საფინანსო%20მაჩვენებლები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * TRANSPORT AND STORAGE
         * ======================= */
                'transport_roads' => [
                    'en' => "ENG/TransportAndStorage/Length%20of%20transport%20ways/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ტრანსპორტი%20და%20დასაწყობება/საერთო%20სარგებლობის%20საავტომობილო%20გზების%20სიგრძე/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * HEALTHCARE
         * ======================= */
                'healthcare_indicators' => [
                    'en' => "ENG/Healthcare/Indicators/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/მაჩვენებლები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_abortions' => [
                    'en' => "ENG/Healthcare/Abortions/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/აბორტები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_anemia' => [
                    'en' => "ENG/Healthcare/Anemia/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/ანემია/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_diabetes' => [
                    'en' => "ENG/Healthcare/Diabetes/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/დიაბეტი/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_cancer' => [
                    'en' => "ENG/Healthcare/Cancer/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/კიბო/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_circulatory' => [
                    'en' => "ENG/Healthcare/Circulatory/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_respiratory' => [
                    'en' => "ENG/Healthcare/Respiratory/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_syphilis' => [
                    'en' => "ENG/Healthcare/Syphilis/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_aids' => [
                    'en' => "ENG/Healthcare/AIDS/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/შიდსი/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'healthcare_tuberculosis' => [
                    'en' => "ENG/Healthcare/Tuberculosis/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/{$kaSafe}"
                ],
            ];

            if (!isset($map[$key][$lang_code])) {
                return '#';
            }

            return $base . $map[$key][$lang_code] . '.xlsx';
        }

        ?>
        <tr>
            <th><?php echo $lang['munstat'] ?></th>
        </tr>
        <tbody>
            <tr>
                <th id="dziritadi1" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $basicInformation[1]; ?> <span class="float-right"><i id="classchange" class="dropdown_img_up"></i></span>
                </th>
            </tr>
            <tr class="informacia1">
                <td><?= $basicInformation[2]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('main_info_area', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>
            <tr class="informacia1">
                <td><?= $basicInformation[3]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('main_info_admin', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi23" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $populationCensus[1]; ?></td>
            </tr>
            <tr class="informacia23">
                <td><?= $populationCensus[2]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('pop_urban_rural', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>
            <tr class="informacia23">
                <td><?= $populationCensus[3]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('pop_by_sex', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi2" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $Population['1']; ?></td>
            </tr>
            <tr class="informacia2">
                <td><?= $Population[2]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('population_number', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>

            <tr class="informacia2">
                <td><?= $Population[3]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('population_urban_share', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>

            <tr class="informacia2">
                <td><?= $Population[4]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('population_density', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>

            <tr>
                <td id="dziritadiMain" title="" onclick="GetIdChange(); demografiaShow();" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $lang['demograph'] ?></td>
            </tr>
            <style>
                #dziritadi3,
                #dziritadi4,
                #dziritadi5,
                #dziritadi6,
                #dziritadi7 {
                    display: none;
                    margin-left: 20px;
                }
            </style>
            <tr>
                <td id="dziritadi3" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $birth['1']; ?></td>
            </tr>
            <tr class="informacia3">
                <td><?= $birth[2]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('birth_live', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>

            <tr class="informacia3">
                <td><?= $birth[3]; ?></td>
                <td>
                    <span class="float-right">
                        <a href="<?= getExcelPath('birth_rate', $municipal_info, $lang_code); ?>">
                            <img src="../images/excel-9-24.png" width="25" height="25" alt="Excel">
                        </a>
                    </span>
                </td>
            </tr>

            <tr class="informacia3">
                <td>
                    <?php echo $birth['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('birth_by_sex', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia3">
                <td>
                    <?php echo $birth['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('birth_sex_ratio', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia3">
                <td>
                    <?php echo $birth['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('birth_mean_age', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia3">
                <td>
                    <?php echo $birth['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('birth_stillbirths', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia3">
                <td>
                    <?php echo $birth['8']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('birth_stillbirths_by_sex', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi4" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $death['1']; ?>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_total', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_rate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_by_age_sex', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_infant_rate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_under5_rate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_by_causes_sex', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            <tr class="informacia4">
                <td>
                    <?php echo $death['8']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_by_causes_urban', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['9']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_by_causes_age', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['10']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('death_suicide', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia4">
                <td>
                    <?php echo $death['11']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Demography/Suicide%20rate/C.%20Batumi.xlsx' : '/regions/municipal/დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi5" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $naturalIncrease['1']; ?>
                </td>
            </tr>
            <tr class="informacia5">
                <td>
                    <?php echo $naturalIncrease['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('natural_increase', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia5">
                <td>
                    <?php echo $naturalIncrease['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('natural_increase_rate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi6" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $marriage['1']; ?>
                </td>
            </tr>
            <tr class="informacia6">
                <td>
                    <?php echo $marriage['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('marriage_total', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia6">
                <td>
                    <?php echo $marriage['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('marriage_rate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia6">
                <td>
                    <?php echo $marriage['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('marriage_married_people', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia6">
                <td>
                    <?php echo $marriage['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('marriage_mean_age', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi7" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $divorce['1']; ?>
                </td>
            </tr>
            <tr class="informacia7">
                <td>
                    <?php echo $divorce['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('divorce_total', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia7">
                <td>
                    <?php echo $divorce['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('divorce_rate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia7">
                <td>
                    <?php echo $divorce['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('divorce_divorced_people', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi8" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $populationDescription['1']; ?>
                </td>
            </tr>
            <tr class="informacia8">
                <td>
                    <?php echo $populationDescription['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('pop_census_median_age', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia8">
                <td>
                    <?php echo $populationDescription['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('pop_census_over_65', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia8">
                <td>
                    <?php echo $populationDescription['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('pop_census_age_dependency', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia8">
                <td>
                    <?php echo $populationDescription['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('pop_census_population_number', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia8">
                <td>
                    <?php echo $populationDescription['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('pop_census_working_age', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia8">
                <td>
                    <?php echo $populationDescription['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('pop_census_households', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi9" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""> <?php echo $employmentAndSalaries['1']; ?>
                </td>
            </tr>
            <tr class="informacia9">
                <td>
                    <?php echo $employmentAndSalaries['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('employment_employed', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia9">
                <td>
                    <?php echo $employmentAndSalaries['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('employment_employees', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia9">
                <td>
                    <?php echo $employmentAndSalaries['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('employment_salary', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi10" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $businessSector['1']; ?>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_turnover', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_production', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_personnel_costs', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_purchases', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_purchases_resale', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_value_added', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['8']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_intermediate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia10">
                <td>
                    <?php echo $businessSector['9']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_investments_fixed', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <style>
                #dziritadi12,
                #dziritadi13,
                #dziritadi14 {
                    display: none;
                    margin-left: 20px;
                }
            </style>
            <tr>
                <td id="dziritadiMain2" title="" onclick="GetIdChange(); registerShow();" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $businessRegister['1']; ?>
                </td>
            </tr>
            <tr class="informacia11">
                <td>
                    <?php echo $businessRegister['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Registered%20entities%20per%201000%20persons/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/რეგისტრირებული%20სუბიექტები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia11">
                <td>
                    <?php echo $businessRegister['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20newly%20registered%20business%20entities%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/ახლად%20რეგისტრირებული%20ბიზნეს%20სუბიექტები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia11">
                <td>
                    <?php echo $businessRegister['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20active%20business%20entities%20registered%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/ეკონომიკურად%20აქტიური%20ბიზნეს%20სუბიექტების%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia11">
                <td>
                    <?php echo $businessRegister['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Business%20Register/Number%20of%20public%20institutions/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ბიზნეს%20რეგისტრი/საჯარო%20დაწესებულებების%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi12" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $accordingToTheTypesOfActivities['1']; ?>
                </td>
            </tr>
            <tr class="informacia12">
                <td>
                    <?php echo $accordingToTheTypesOfActivities['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byKindOfEconomicActivity/Number%20of%20registered%20entities%20by%20kind%20of%20economic%20activity/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia12">
                <td>
                    <?php echo $accordingToTheTypesOfActivities['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byKindOfEconomicActivity/Number%20of%20active%20entities%20by%20kind%20of%20economic%20activity/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi13" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $AccordingToTheFormsOfOwnership['1']; ?>
                </td>
            </tr>
            <tr class="informacia13">
                <td>
                    <?php echo $AccordingToTheFormsOfOwnership['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20registered%20entities%20by%20ownership%20type/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia13">
                <td>
                    <?php echo $AccordingToTheFormsOfOwnership['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20active%20entities%20by%20ownership%20type%20and%20size/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმებისა%20და%20ზომების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia13">
                <td>
                    <?php echo $AccordingToTheFormsOfOwnership['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOwnershipType/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20ownership%20type/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/საკუთრების%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi14" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $accordingToOrganizationalLegalForms['1']; ?>
                </td>
            </tr>
            <tr class="informacia14">
                <td>
                    <?php echo $accordingToOrganizationalLegalForms['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20registered%20entities%20by%20organizational-legal%20form/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia14">
                <td>
                    <?php echo $accordingToOrganizationalLegalForms['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20active%20entities%20by%20organizational-legal%20form/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვ/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia14">
                <td>
                    <?php echo $accordingToOrganizationalLegalForms['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/byOrganization-legalForms/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20organizational-legal%20form/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $budget['1']; ?>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Budget/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ბიუჯეტი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $agriculture['1']; ?>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Share%20of%20Agriculture%20Land%20Area/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/soflis%20meurneoba/ეკო_აქტ/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                </td>
            </tr>
            <tr>
                <td id="dziritadi16" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $construction['1']; ?>
                </td>
            </tr>
            <tr class="informacia16">
                <td>
                    <?php echo $construction['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Construction/Permissions%20granted/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/მშენებლობა/მშენებლობაზე%20გაცემული%20ნებართვები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia16">
                <td>
                    <?php echo $construction['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Construction/Completed%20Construction/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/მშენებლობა/დასრულებული%20მშენებლობა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi17" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $trading['1']; ?>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20organizational%20legal%20forms%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ორგანიზაციულ-სამართლებლივი%20ფორმების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20ownership%20type%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20საკუთრების%20ფორმის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20by%20type%20in%20Georgia/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ტიპების%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20markets%20and%20fairs%20on%20days%20of%20trade/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20რაოდენობა%20ვაჭრობის%20დღეთა%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Average%20annual%20number%20of%20employed%20persons/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20დირექციებში%20დასაქმებულთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Number%20of%20market-place%20and%20sellers%20on%20the%20markets%20and%20fairs/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრებში%20და%20ბაზრობებში%20სავაჭრო%20ადგილების%20და%20მოვაჭრეთა%20რაოდენობა/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['8']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Trading/Financial%20indices%20of%20markets%20and%20fairs/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ვაჭრობა/ბაზრების%20და%20ბაზრობების%20საფინანსო%20მაჩვენებლები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi18" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $hotels['1']; ?>
                </td>
            </tr>
            <tr class="informacia18">
                <td>
                    <?php echo $hotels['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20hotels%20and%20hotel-type%20establishments%20and%20their%20total%20area/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20რაოდენობა%20და%20ფართობი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia18">
                <td>
                    <?php echo $hotels['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Rooms%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/ნომრების%20რაოდენობა%20სასტუმროებსა%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia18">
                <td>
                    <?php echo $hotels['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Guests/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სტუმრები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia18">
                <td>
                    <?php echo $hotels['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $transportAndStorage['1']; ?>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/TransportAndStorage/Length%20of%20transport%20ways/Adjara%20A.R/C.%20Batumi%20Municipality.xlsx' : '/regions/municipal/ტრანსპორტი%20და%20დასაწყობება/საერთო%20სარგებლობის%20საავტომობილო%20გზების%20სიგრძე/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                </td>
            </tr>
            <style>
                #dziritadi20,
                #dziritadi21 {
                    display: none;
                    margin-left: 20px;
                }
            </style>
            <tr>
                <td id="dziritadiMain20" title="" onclick="GetIdChange(); healthcareShow();" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['1'] ?></td>
            </tr>
            <tr>
                <td id="dziritadi20" onclick="GetIdChange();" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['2']; ?>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Indicators/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/მაჩვენებლები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Abortions/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/აბორტები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Anemia/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/ანემია/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Diabetes/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/დიაბეტი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Cancer/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/კიბო/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['8']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Circulatory/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['9']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Respiratory/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['10']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Syphilis/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['11']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/AIDS/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/შიდსი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['12']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Tuberculosis/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['13']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Healthcare/Hepatitis/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/ჯანდაცვა/ჰეპატიტი/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi21" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['14']; ?>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['15']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Indicators/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/მაჩვენებლები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['16']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Disability%20Persons/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/დევნილი%20შშმ%20პირები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['17']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Disabilities%20Registered/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/რეგისტრირებული%20შშმ%20პირები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['18']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Subsistence%20Allowance/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/საარსებო/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['19']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Receiving/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/მიმღები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['20']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi22" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $education['1']; ?>
                </td>
            </tr>
            <tr class="informacia22">
                <td>
                    <?php echo $education['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/Preschool%20and%20Education%20Institutions/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/განათლება/სკოლამდელი%20აღზრდისა%20და%20განათლების%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia22">
                <td>
                    <?php echo $education['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/General%20Educational%20Institution/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia22">
                <td>
                    <?php echo $education['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/C.%20Batumi.xlsx' : '/regions/municipal/განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/ქ.%20ბათუმის%20მუნიციპალიტეტი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture['1']; ?>
                    <span class="float-right"><a href="<?php echo (isset($_GET['lang']) && $_GET['lang'] == 'en') ? '/regions/municipal/ENG/Culture/Adjara%20A.R/C.%20Batumi.xlsx' : '/regions/municipal/კულტურა/აჭარა%20ა.რ/ქ.%20ბათუმი.xlsx'; ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                </td>
            </tr>




        </tbody>
    </table>
</div>