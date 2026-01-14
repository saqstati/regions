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
        } elseif (strpos($current_page, 'qobuleti') !== false || strpos($current_page, 'kobuleti') !== false) {
            $municipal_info = [
                'en_name' => 'Kobuleti',
                'en_full' => 'Kobuleti Municipality',
                'en_short' => 'Kobuleti',
                'ka_name' => 'ქობულეთი',
                'ka_full' => 'ქობულეთის მუნიციპალიტეტი',
                'ka_short' => 'ქობულეთი'
            ];
        } elseif (strpos($current_page, 'shuaxevi') !== false) {
            $municipal_info = [
                'en_name' => 'Shuakhevi',
                'en_full' => 'Shuakhevi Municipality',
                'en_short' => 'Shuakhevi',
                'ka_name' => 'შუახევი',
                'ka_full' => 'შუახევის მუნიციპალიტეტი',
                'ka_short' => 'შუახევი'
            ];
        } elseif (strpos($current_page, 'xelvachauri') !== false || strpos($current_page, 'khelvachauri') !== false) {
            $municipal_info = [
                'en_name' => 'Khelvachauri',
                'en_full' => 'Khelvachauri Municipality',
                'en_short' => 'Khelvachauri',
                'ka_name' => 'ხელვაჩაური',
                'ka_full' => 'ხელვაჩაურის მუნიციპალიტეტი',
                'ka_short' => 'ხელვაჩაური'
            ];
        } elseif (strpos($current_page, 'xulo') !== false || strpos($current_page, 'khulo') !== false) {
            $municipal_info = [
                'en_name' => 'Khulo',
                'en_full' => 'Khulo Municipality',
                'en_short' => 'Khulo',
                'ka_name' => 'ხულო',
                'ka_full' => 'ხულოს მუნიციპალიტეტი',
                'ka_short' => 'ხულო'
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
            $hotels = $transportAndStorage = $tourism = $healthCareAndSocialSecurity = $education = $culture = $Government = [];

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
            $tourism[$row['ID']] = $row['tourism'];
            $healthCareAndSocialSecurity[$row['ID']] = $row['healthCareAndSocialSecurity'];
            $education[$row['ID']] = $row['education'];
            $culture[$row['ID']] = $row['culture'];
            $Government[$row['ID']] = $row['Government'];
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
                    'ka' => "დემოგრაფია/დედის%20საშუალო%20ასაკი%20ბავშვის%20დაბადებისას/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * DEMOGRAPHY – DEATH
         * ======================= */
                'death_total' => [
                    'en' => "ENG/Demography/Number%20of%20deaths/{$en}",
                    'ka' => "დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა/{$municipal_info['ka_name']}"
                ],
                'death_rate' => [
                    'en' => "ENG/Demography/Crude%20death%20rate/{$en}",
                    'ka' => "დემოგრაფია/მოკვდაობის%20ზოგადი%20კოეფიციენტი/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * NATURAL INCREASE
         * ======================= */
                'natural_increase' => [
                    'en' => "ENG/Demography/Natural%20increase/{$en}",
                    'ka' => "დემოგრაფია/ბუნებრივი%20მატება/{$municipal_info['ka_name']}"
                ],
                'natural_increase_rate' => [
                    'en' => "ENG/Demography/Natural%20increase%20rate/{$en}",
                    'ka' => "დემოგრაფია/ბუნებრივი%20მატების%20კოეფიციენტი/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * MARRIAGE
         * ======================= */
                'marriage_total' => [
                    'en' => "ENG/Demography/Number%20of%20registered%20marriages/{$en}",
                    'ka' => "დემოგრაფია/რეგისტრირებულ%20ქორწინებათა%20რაოდენობა/{$municipal_info['ka_name']}"
                ],
                'marriage_rate' => [
                    'en' => "ENG/Demography/Crude%20marriage%20rate/{$en}",
                    'ka' => "დემოგრაფია/ქორწინების%20ზოგადი%20კოეფიციენტი/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * DIVORCE
         * ======================= */
                'divorce_total' => [
                    'en' => "ENG/Demography/Number%20of%20registered%20divorces/{$en}",
                    'ka' => "დემოგრაფია/რეგისტრირებულ%20განქორწინებათა%20რაოდენობა/{$municipal_info['ka_name']}"
                ],
                'divorce_rate' => [
                    'en' => "ENG/Demography/Crude%20divorce%20rate/{$en}",
                    'ka' => "დემოგრაფია/განქორწინების%20ზოგადი%20კოეფიციენტი/{$municipal_info['ka_name']}"
                ],
                'divorce_divorced_people' => [
                    'en' => "ENG/Demography/Number%20of%20divorced%20people%20by%20age%20groups%20and%20sex/{$en}",
                    'ka' => "დემოგრაფია/განქორწინებულთა%20რიცხოვნობა/{$municipal_info['ka_name']}"
                ],


                /* =======================
         * EMPLOYMENT & SALARIES
         * ======================= */
                'employment_employed' => [
                    'en' => "ENG/Employment%20and%20Wages/Employed%20persons/Adjara%20A.R/{$en}",
                    'ka' => "დასაქმება%20და%20ხელფასები/დასაქმებულები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'employment_employees' => [
                    'en' => "ENG/Employment%20and%20Wages/Employees/Adjara%20A.R/{$en}",
                    'ka' => "დასაქმება%20და%20ხელფასები/დაქირავებულები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'employment_salary' => [
                    'en' => "ENG/Employment%20and%20Wages/Average%20monthly%20remuneration/Adjara%20A.R/{$en}",
                    'ka' => "დასაქმება%20და%20ხელფასები/ხელფასი/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * POPULATION CENSUS
         * ======================= */
                'pop_census_median_age' => [
                    'en' => "ENG/Population%20census/Median%20age%20of%20population/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/მოსახლეობის%20მედიანური%20ასაკი/{$municipal_info['ka_name']}"
                ],
                'pop_census_over_65' => [
                    'en' => "ENG/Population%20census/Percentage%20of%20population%20aged%2065%20and%20over/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/65%20წელზე%20მეტი/{$municipal_info['ka_name']}"
                ],
                'pop_census_age_dependency' => [
                    'en' => "ENG/Population%20census/Age%20dependency%20ratios/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/ასაკის%20დატვირთვის%20კოეფიციენტები/{$municipal_info['ka_name']}"
                ],
                'pop_census_population_number' => [
                    'en' => "ENG/Population%20census/Number%20of%20population/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/მოსახლეობის%20რიცხოვნობა/{$municipal_info['ka_name']}"
                ],
                'pop_census_working_age' => [
                    'en' => "ENG/Population%20census/Share%20of%20working%20age%20population/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/შრომისუნარიანი%20ასაკის/{$municipal_info['ka_name']}"
                ],
                'pop_census_households' => [
                    'en' => "ENG/Population%20census/Number%20of%20private%20households/{$en}",
                    'ka' => "მოსახლეობის%20აღწერა/კერძო%20შინამეურნეობები/{$municipal_info['ka_name']}"
                ],



                /* =======================
         * BUSINESS - ADDITIONAL
         * ======================= */
                'business_investments_fixed' => [
                    'en' => "ENG/Business%20Sector/Investments%20in%20fixed%20assets/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/ინვესტიციები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * DEMOGRAPHY - ADDITIONAL BIRTH
         * ======================= */
                'birth_stillbirths' => [
                    'en' => "ENG/Demography/Number%20of%20stillbirths/{$en}",
                    'ka' => "დემოგრაფია/მკვდრადშობილთა%20რიცხოვნობა/{$municipal_info['ka_name']}"
                ],
                'birth_stillbirths_by_sex' => [
                    'en' => "ENG/Demography/Number%20of%20stillbirths%20by%20sex/Adjara%20A.R/{$en}",
                    'ka' => "დემოგრაფია/მკვდართშობილები%20სქესის%20მიხედვით/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * DEMOGRAPHY - ADDITIONAL DEATH
         * ======================= */
                'death_by_age_sex' => [
                    'en' => "ENG/Demography/Number%20of%20deaths%20by%20age%20and%20sex/{$en}",
                    'ka' => "დემოგრაფია/გარდაცვლილთა%20რიცხოვნობა%20ასაკის%20და%20სქესის%20მიხედვით/{$municipal_info['ka_name']}"
                ],
                'death_infant_rate' => [
                    'en' => "ENG/Demography/Infant%20mortality%20rate/{$en}",
                    'ka' => "დემოგრაფია/ჩვილ%20ბავშვთა%20მოკვდაობის%20კოეფიციენტი/{$municipal_info['ka_name']}"
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
                    'ka' => "დემოგრაფია/თვითმკვლელობით%20გარდაცვლილთა%20რიცხოვნობა/{$municipal_info['ka_name']}"
                ],
                'death_suicide_rate' => [
                    'en' => "ENG/Demography/Suicide%20rate/{$en}",
                    'ka' => "დემოგრაფია/თვითმკვლელობის%20შედეგად%20სიკვილიანობის%20კოეფიციენტი/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * MARRIAGE - ADDITIONAL
         * ======================= */
                'marriage_married_people' => [
                    'en' => "ENG/Demography/Number%20of%20married%20people/{$en}",
                    'ka' => "დემოგრაფია/დაქორწინებულთა%20რიცხოვნობა/{$municipal_info['ka_name']}"
                ],
                'marriage_mean_age' => [
                    'en' => "ENG/Demography/Mean%20age%20of%20spouses/{$en}",
                    'ka' => "დემოგრაფია/ქორწინების%20საშუალო%20ასაკი/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * BUSINESS SECTOR
         * ======================= */
                'business_turnover' => [
                    'en' => "ENG/Business%20Sector/turnover/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/ბრუნვა/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_production' => [
                    'en' => "ENG/Business%20Sector/Production%20Value/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/პროდუქციის%20გამოშვება/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_personnel_costs' => [
                    'en' => "ENG/Business%20Sector/Pesronal%20Costs/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/შრომითი%20დანახარჯები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_purchases' => [
                    'en' => "ENG/Business%20Sector/Purchase%20of%20good%20and%20services/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/საქონლისა%20და%20მომსახურების%20ყიდვები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_purchases_resale' => [
                    'en' => "ENG/Business%20Sector/Purchase%20of%20good%20and%20services%20for%20resale/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/გადასაყიდად%20განკუთვნილი%20საქონლისა%20და%20მომსახურების%20ყიდვები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_value_added' => [
                    'en' => "ENG/Business%20Sector/Value%20added/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/დამატებული%20ღირებულება/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_intermediate' => [
                    'en' => "ENG/Business%20Sector/Intermediate%20consumption/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/შუალედური%20მოხმარება/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_investment' => [
                    'en' => "ENG/Business%20Sector/Investment%20in%20fixed%20assets/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20სექტორი/ინვესტიცია%20ძირითად%20კაპიტალში/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * BUDGET
         * ======================= */
                'budget_main' => [
                    'en' => "ENG/Budget/Adjara%20A.R/{$en}",
                    'ka' => "ბიუჯეტი/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * CONSTRUCTION
         * ======================= */
                'construction_permissions' => [
                    'en' => "ENG/Construction/Permissions%20granted/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "მშენებლობა/მშენებლობაზე%20გაცემული%20ნებართვები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'construction_completed' => [
                    'en' => "ENG/Construction/Completed%20Construction/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "მშენებლობა/დასრულებული%20მშენებლობა/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
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
         * TOURISM
         * ======================= */
                'tourism_domestic' => [
                    'en' => "ENG/Tourism/Adjara%20A.R/{$en}",
                    'ka' => "ტურიზმი/აჭარის%20ა.რ/{$municipal_info['ka_full']}"
                ],


                /* =======================
         * HEALTHCARE
         * ======================= */
                'healthcare_indicators' => [
                    'en' => "ENG/Healthcare/Indicators/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/მაჩვენებლები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_emergent' => [
                    'en' => "ENG/Healthcare/Emergent/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/სასწრაფო/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_abortions' => [
                    'en' => "ENG/Healthcare/Abortions/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/აბორტები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_anemia' => [
                    'en' => "ENG/Healthcare/Anemia/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/ანემია/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_diabetes' => [
                    'en' => "ENG/Healthcare/Diabetes/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/დიაბეტი/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_cancer' => [
                    'en' => "ENG/Healthcare/Cancer/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/კიბო/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_circulatory' => [
                    'en' => "ENG/Healthcare/Circulatory/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/სისხლის%20მიმოქცევა/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_respiratory' => [
                    'en' => "ENG/Healthcare/Respiratory/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/სუნთქვა/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_syphilis' => [
                    'en' => "ENG/Healthcare/Syphilis/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/ათაშანგი/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_aids' => [
                    'en' => "ENG/Healthcare/AIDS/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/შიდსი/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_tuberculosis' => [
                    'en' => "ENG/Healthcare/Tuberculosis/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/ტუბერკულიოზი/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'healthcare_hepatitis' => [
                    'en' => "ENG/Healthcare/Hepatitis/Adjara%20A.R/{$en}",
                    'ka' => "ჯანდაცვა/ჰეპატიტი/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * SOCIAL STATISTICS
         * ======================= */

                'social_subsistence' => [
                    'en' => "ENG/Social%20Statistic/Subsistence%20Allowance/Adjara%20A.R/{$en}",
                    'ka' => "სოციალური%20სტატისტიკა/საარსებო/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'social_receiving' => [
                    'en' => "ENG/Social%20Statistic/Receiving/Adjara%20A.R/{$en}",
                    'ka' => "სოციალური%20სტატისტიკა/მიმღები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'social_beneficiaries' => [
                    'en' => "ENG/Social%20Statistic/Beneficiaries/Adjara%20A.R/{$en}",
                    'ka' => "სოციალური%20სტატისტიკა/ბენეფიციართა/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * EDUCATION
         * ======================= */
                'education_preschool' => [
                    'en' => "ENG/Education/Preschool%20and%20Education%20Institutions/Adjara%20A.R/{$en}",
                    'ka' => "განათლება/სკოლამდელი%20აღზრდისა%20და%20განათლების%20დაწესებულებები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'education_general' => [
                    'en' => "ENG/Education/General%20Educational%20Institution/Adjara%20A.R/{$en}",
                    'ka' => "განათლება/ზოგადსაგანმანათლებლო%20დაწესებულებები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'education_status' => [
                    'en' => "ENG/Education/Status/Adjara%20A.R/{$municipal_info['en_full']}",
                    'ka' => "განათლება/სტატუსი/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'education_directors' => [
                    'en' => "ENG/Education/Directors/Adjara%20A.R/{$municipal_info['en_full']}",
                    'ka' => "განათლება/დირექტორები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'education_vocational' => [
                    'en' => "ENG/Education/Vocational%20and%20Higher%20educational%20institutions/Adjara/{$en}",
                    'ka' => "განათლება/პროფესიული%20და%20უმაღლესი%20საგანმანათლებლო%20დაწესებულებები/აჭარის%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * CULTURE
         * ======================= */
                'culture' => [
                    'en' => "ENG/Culture/Adjara%20A.R/{$en}",
                    'ka' => "კულტურა/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],

                /* =======================
         * OTHER MISSING PATHS
         * ======================= */

                'trading_financial_indices' => [
                    'en' => "ENG/Trading/Financial%20indices%20of%20markets%20and%20fairs/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ვაჭრობა/ბაზრების%20და%20ბაზრობების%20საფინანსო%20მაჩვენებლები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * BUSINESS REGISTER
         * ======================= */
                'business_register_entities' => [
                    'en' => "ENG/Business%20Register/Registered%20entities%20per%201000%20persons/Adjara%20A.R/{$en}",
                    'ka' => "ბიზნეს%20რეგისტრი/რეგისტრირებული%20სუბიექტები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'business_register_newly' => [
                    'en' => "ENG/Business%20Register/Number%20of%20newly%20registered%20business%20entities%20in%20Georgia/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ბიზნეს%20რეგისტრი/ახლად%20რეგისტრირებული%20ბიზნეს%20სუბიექტები/აჭარა%20ა.რ/{$municipal_info['ka_name']}"
                ],
                'business_register_active' => [
                    'en' => "ENG/Business%20Register/Number%20of%20active%20business%20entities%20registered%20in%20Georgia/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ბიზნეს%20რეგისტრი/ეკონომიკურად%20აქტიური%20ბიზნეს%20სუბიექტების%20რაოდენობა/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'business_register_public' => [
                    'en' => "ENG/Business%20Register/Number%20of%20public%20institutions/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ბიზნეს%20რეგისტრი/საჯარო%20დაწესებულებების%20რაოდენობა/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * ECONOMIC ACTIVITY TYPES
         * ======================= */
                'economic_activity_registered' => [
                    'en' => "ENG/byKindOfEconomicActivity/Number%20of%20registered%20entities%20by%20kind%20of%20economic%20activity/Adjara%20A.R/{$en}",
                    'ka' => "ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'economic_activity_active' => [
                    'en' => "ENG/byKindOfEconomicActivity/Number%20of%20active%20entities%20by%20kind%20of%20economic%20activity/Adjara%20A.R/{$en}",
                    'ka' => "ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ეკონომიკური%20საქმიანობის%20სახეების%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * OWNERSHIP FORMS
         * ======================= */
                'ownership_registered' => [
                    'en' => "ENG/byOwnershipType/Number%20of%20registered%20entities%20by%20ownership%20type/Adjara%20A.R/{$en}",
                    'ka' => "საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმების%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'ownership_active_size' => [
                    'en' => "ENG/byOwnershipType/Number%20of%20active%20entities%20by%20ownership%20type%20and%20size/Adjara%20A.R/{$en}",
                    'ka' => "საკუთრების%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20საკუთრების%20ფორმებისა%20და%20ზომების%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'ownership_newly' => [
                    'en' => "ENG/byOwnershipType/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20ownership%20type/Adjara%20A.R/{$en}",
                    'ka' => "საკუთრების%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * ORGANIZATIONAL LEGAL FORMS
         * ======================= */
                'organizational_registered' => [
                    'en' => "ENG/byOrganization-legalForms/Number%20of%20registered%20entities%20by%20organizational-legal%20form/Adjara%20A.R/{$en}",
                    'ka' => "ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'organizational_active' => [
                    'en' => "ENG/byOrganization-legalForms/Number%20of%20active%20entities%20by%20organizational-legal%20form/Adjara%20A.R/{$en}",
                    'ka' => "ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/რეგისტრირებულ%20მოქმედ%20სუბიექტთა%20რაოდენობა%20ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვ/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'organizational_newly' => [
                    'en' => "ENG/byOrganization-legalForms/Number%20of%20entities%20newly%20registered%20in%20Georgia%20by%20organizational-legal%20form/Adjara%20A.R/{$en}",
                    'ka' => "ორგანიზაციულ-სამართლებრივი%20ფორმების%20მიხედვით/ახლადრეგისტრირებულ%20სუბიექტთა%20რაოდენობა/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * AGRICULTURE
         * ======================= */
                'agriculture_land' => [
                    'en' => "ENG/Share%20of%20Agriculture%20Land%20Area/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "soflis%20meurneoba/ეკო_აქტ/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * HOTELS AND ACCOMMODATION
         * ======================= */
                'hotels_accommodation' => [
                    'en' => "ENG/Hotels/Accommodation/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმრო%20ობიექტები/სასტუმრო%20ობიექტები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'hotels_visitors_residents' => [
                    'en' => "ENG/Hotels/Visitors%20Residents/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმრო%20ობიექტები/ვიზიტორები%20რეზიდენტები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'hotels_visitors_nonresidents' => [
                    'en' => "ENG/Hotels/Visitors%20non%20residents/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმრო%20ობიექტები/ვიზიტორები%20არარეზიდენტები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'hotels_nights_residents' => [
                    'en' => "ENG/Hotels/Nights%20spent%20Residents/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმრო%20ობიექტები/ღამეები%20რეზიდენტები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],



                /* =======================
         * HOTELS - Detailed
         * ======================= */
                'hotels_number_area' => [
                    'en' => "ENG/Hotels/Number%20of%20hotels%20and%20hotel-type%20establishments%20and%20their%20total%20area/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმროები/სასტუმროების%20რაოდენობა%20და%20ფართობი/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'hotels_rooms' => [
                    'en' => "ENG/Hotels/Number%20of%20Rooms%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმროები/ნომრების%20რაოდენობა%20სასტუმროებსა%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'hotels_guests' => [
                    'en' => "ENG/Hotels/Guests/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმროები/სტუმრები/აჭარა%20ა.რ/{$kaSafe}"
                ],
                'hotels_employees' => [
                    'en' => "ENG/Hotels/Number%20of%20Employees%20in%20Hotels%20and%20Hotel-type%20enterprises/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "სასტუმროები/სასტუმროების%20და%20სასტუმროს%20ტიპის%20დაწესებულებებში%20დასაქმებულთა%20რაოდენობა%20სქესის%20მიხედვით/აჭარა%20ა.რ/{$kaSafe}"
                ],

                /* =======================
         * SOCIAL STATISTICS
         * ======================= */
                'social_indicators' => [
                    'en' => "ENG/Social%20Statistic/Indicators/Adjara%20A.R/{$en}",
                    'ka' => "სოციალური%20სტატისტიკა/მაჩვენებლები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'social_disability' => [
                    'en' => "ENG/Social%20Statistic/Disability%20Persons/Adjara%20A.R/{$en}",
                    'ka' => "სოციალური%20სტატისტიკა/დევნილი%20შშმ%20პირები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'social_registered' => [
                    'en' => "ENG/Social%20Statistic/Disabilities%20Registered/Adjara%20A.R/{$en}",
                    'ka' => "სოციალური%20სტატისტიკა/რეგისტრირებული%20შშმ%20პირები/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],

                /* =======================
         * GOVERNMENT
         * ======================= */
                'self_governance' => [
                    'en' => "ENG/Government/Self-Governance/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ხელისუფლება/თვითმმართველობა/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
                ],
                'voters' => [
                    'en' => "ENG/Government/Voters/Adjara%20A.R/{$en}%20Municipality",
                    'ka' => "ხელისუფლება/ამომრჩეველი/აჭარა%20ა.რ/{$municipal_info['ka_full']}"
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
                    <span class="float-right"><a href="<?= getExcelPath('death_suicide_rate', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                    <span class="float-right"><a href="<?= getExcelPath('business_register_entities', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia11">
                <td>
                    <?php echo $businessRegister['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_register_newly', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia11">
                <td>
                    <?php echo $businessRegister['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_register_active', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia11">
                <td>
                    <?php echo $businessRegister['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('business_register_public', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                    <span class="float-right"><a href="<?= getExcelPath('economic_activity_registered', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia12">
                <td>
                    <?php echo $accordingToTheTypesOfActivities['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('economic_activity_active', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                    <span class="float-right"><a href="<?= getExcelPath('ownership_registered', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia13">
                <td>
                    <?php echo $AccordingToTheFormsOfOwnership['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('ownership_active_size', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia13">
                <td>
                    <?php echo $AccordingToTheFormsOfOwnership['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('ownership_newly', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                    <span class="float-right"><a href="<?= getExcelPath('organizational_registered', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia14">
                <td>
                    <?php echo $accordingToOrganizationalLegalForms['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('organizational_active', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia14">
                <td>
                    <?php echo $accordingToOrganizationalLegalForms['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('organizational_newly', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $budget['1']; ?>
                    <span class="float-right"><a href="<?= getExcelPath('budget_main', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $agriculture['1']; ?>
                    <span class="float-right"><a href="<?= getExcelPath('agriculture_land', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
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
                    <span class="float-right"><a href="<?= getExcelPath('construction_permissions', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia16">
                <td>
                    <?php echo $construction['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('construction_completed', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                    <span class="float-right"><a href="<?= getExcelPath('trading_markets_legal', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('trading_markets_ownership', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('trading_markets_type', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('trading_markets_days', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('trading_employed', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('trading_sellers', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia17">
                <td>
                    <?php echo $trading['8']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('trading_financial_indices', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                    <span class="float-right"><a href="<?= getExcelPath('hotels_number_area', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia18">
                <td>
                    <?php echo $hotels['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('hotels_rooms', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia18">
                <td>
                    <?php echo $hotels['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('hotels_guests', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia18">
                <td>
                    <?php echo $hotels['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('hotels_employees', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $transportAndStorage['1']; ?>
                    <span class="float-right"><a href="<?= getExcelPath('transport_roads', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $tourism['1']; ?>
                    <span class="float-right"><a href="<?= getExcelPath('tourism_domestic', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
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
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_indicators', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_emergent', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_abortions', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_anemia', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['7']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_diabetes', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['8']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_cancer', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['9']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_circulatory', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['10']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_respiratory', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['11']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_syphilis', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['12']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_aids', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['13']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_tuberculosis', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia20">
                <td>
                    <?php echo $healthCareAndSocialSecurity['14']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('healthcare_hepatitis', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="dziritadi21" onclick="GetIdChange()" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $healthCareAndSocialSecurity['15']; ?>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['16']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('social_indicators', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['17']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('social_disability', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['18']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('social_registered', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['19']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('social_subsistence', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['20']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('social_receiving', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia21">
                <td>
                    <?php echo $healthCareAndSocialSecurity['21']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('social_beneficiaries', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
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
                    <span class="float-right"><a href="<?= getExcelPath('education_preschool', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia22">
                <td>
                    <?php echo $education['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('education_general', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia22">
                <td>
                    <?php echo $education['4']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('education_status', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia22">
                <td>
                    <?php echo $education['5']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('education_directors', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia22">
                <td>
                    <?php echo $education['6']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('education_vocational', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr>
                <td id="withoutArrow" title="" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $culture['1']; ?>
                    <span class="float-right"><a href="<?= getExcelPath('culture', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a>
                </td>
            </tr>
            <tr>
                <td id="dziritadi36" title="" onclick="GetIdChange()" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-content=""><?php echo $Government['1']; ?>
                </td>
            </tr>
            <tr class="informacia36">
                <td>
                    <?php echo $Government['2']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('self_governance', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>
            <tr class="informacia36">
                <td>
                    <?php echo $Government['3']; ?>
                </td>
                <td>
                    <span class="float-right"><a href="<?= getExcelPath('voters', $municipal_info, $lang_code); ?>"> <img src="../images/excel-9-24.png" alt="exel" width="25" height="25"> </a></span>
                </td>
            </tr>



        </tbody>
    </table>
</div>