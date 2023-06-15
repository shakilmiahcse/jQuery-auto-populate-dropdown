$(document).ready(function() {
    // Define the category-subcategory mapping as an object
    var categorySubcategoryMapping = {
        Academic: ["Class Six", "Class Seven", "Class Eight", "Class Nin","Class Ten"],
        Religion: ["Christianity","Islam","Buddhism","Hinduism","Judaism","Sikhism","Taoism","Confucianism","Shintoism","Other Religions"],
        Fiction: ["Mystery","Science Fiction","Fantasy","Romance","Historical Fiction","Thriller","Horror","Adventure","Young Adult","Literary Fiction"],
        NonFiction: ["Biography","History","Science","Self-Help","Business","Health and Wellness","Travel","Cooking","Art and Design","Politics"]
      // Add more category-subcategory mappings here
    };
  
    // Handle the change event of the category dropdown
    $('#category').change(function() {
      var selectedCategory = $(this).val();
      var subcategoryDropdown = $('#subcategory');
  
      // Clear existing options in subcategory dropdown
      subcategoryDropdown.empty();
  
      // Add default "Select Subcategory" option
      subcategoryDropdown.append($('<option>', {
        value: '',
        text: 'Select Subcategory'
      }));
  
      // Load corresponding subcategories based on the selected category
      if (selectedCategory in categorySubcategoryMapping) {
        var subcategories = categorySubcategoryMapping[selectedCategory];
        $.each(subcategories, function(index, subcategory) {
          subcategoryDropdown.append($('<option>', {
            value: subcategory,
            text: subcategory
          }));
        });
      }
    });
  });

        $(document).ready(function() {
            // Define the division-district mapping as an object
            var divisionDistrictMapping = {
                dhaka: ["Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Kishoreganj", "Madaripur", "Manikganj", "Munshiganj", "Narayanganj", "Narsingdi", "Rajbari", "Shariatpur", "Tangail"],
                chittagong: ["Bandarban", "Brahmanbaria", "Chandpur", "Chittagong", "Comilla", "Cox's Bazar", "Feni", "Khagrachari", "Lakshmipur", "Noakhali", "Rangamati"],
                Rajshahi: ["Rajshahi", "Bogra", "Naogaon", "Natore", "Chapainawabganj", "Joypurhat", "Pabna", "Sirajganj"],
                Khulna: ["Khulna", "Bagerhat", "Chuadanga", "Jessore", "Jhenaidah", "Kushtia", "Magura", "Meherpur", "Narail", "Satkhira"],
                Barisal: ["Barisal", "Barguna", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur"],
                Sylhet: ["Sylhet", "Sunamganj", "Moulvibazar", "Habiganj"],
                Rangpur: ["Rangpur", "Dinajpur", "Gaibandha", "Kurigram", "Lalmonirhat", "Nilphamari", "Panchagarh", "Thakurgaon"],
                Mymensingh: ["Mymensingh", "Jamalpur", "Sherpur", "Netrokona"]
                // Add more division-district mappings here
            };

            // Handle the change event of the division dropdown
            $('#division').change(function() {
                var selectedDivision = $(this).val();
                var districtDropdown = $('#district');

                // Clear existing options in district dropdown
                districtDropdown.empty();

                // Add default "Select District" option
                districtDropdown.append($('<option>', {
                    value: '',
                    text: 'Select District'
                }));

                // Load corresponding districts based on the selected division
                if (selectedDivision in divisionDistrictMapping) {
                    var districts = divisionDistrictMapping[selectedDivision];
                    $.each(districts, function(index, district) {
                        districtDropdown.append($('<option>', {
                            value: district,
                            text: district
                        }));
                    });
                }
            });
        });
  