<?php


function getAboutSection() {
    $aboutContent = '
    <section class="bg-green-500 -mt-12 py-16">
        <h1 class="text-center uppercase text-white text-4xl font-bold  leading-none tracking-normal">
            About
        </h1>
        <div class="flex flex-row items-center justify-center py-4">
            <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
            <svg class="h-12 fill-current text-white " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
            </svg>
            <span class="h-1 w-24 bg-white rounded-full mx-2"></span>
        </div>
        <div class="flex flex-col lg:flex-row max-w-lg md:max-w-2xl lg:max-w-3xl mx-auto">
            <div class="mx-6 text-white text-xl py-4">Freelancer is a free tailwind css theme created from Freelancer theme by Start Bootstrap.
                The entire template was written using only the default configuration file.
            </div>
            <div class="mx-6 text-white text-xl py-4">
                You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email
                address to the contact form to make it fully functional!</div>
        </div>
        <div class="flex justify-center py-8">
            <button class="bg-transparent hover:bg-white hover:text-black text-white border-2 border-white font-normal py-3 px-5 rounded-lg inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/>
                </svg>
                <span>Free Download!</span>
            </button>
        </div>
    </section>';

    return $aboutContent;
}

$year = date("Y");
$location = 'Metropolitan City of Bari, 70121, Italy';


class Building {
    public $price;
    public $name;
    public $address;
    public $contactPhone;
    public $image;
    public $bedrooms;
    public $bathrooms;

    public function __construct($price, $name, $address, $contactPhone, $image, $bedrooms, $bathrooms) {
        $this->price = $price;
        $this->name = $name;
        $this->address = $address;
        $this->contactPhone = $contactPhone;
        $this->image = $image;
        $this->bedrooms = $bedrooms;
        $this->bathrooms = $bathrooms;
    }

    public function applyDiscount() {
        $randomPercentage = rand(0, 100);

        if ($randomPercentage <= 30) {
            $discountPercentage = rand(1, 30);
            $discountedPrice = $this->price - ($this->price * $discountPercentage) / 100;

            if ($discountedPrice < 0) {
                $discountedPrice = 0;
            }

            return [
                'discountPercentage' => $discountPercentage,
                'discountedPrice' => $discountedPrice,
            ];
        }

        return [
            'discountPercentage' => 0,
            'discountedPrice' => $this->price,
        ];
    }


    public function displayDetails() {
        $discountResult = $this->applyDiscount();
        $discountPercentage = $discountResult['discountPercentage'];

        echo '
            <div class="max-w-sm w-full py-6 px-3">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-56 p-4" style="background-image: url(' . $this->image . ')">
                        <div class="flex justify-end">
                            <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="uppercase tracking-wide text-sm font-bold text-gray-700">' . $this->name . '</p>';

        if ($discountPercentage > 0) {
            echo '<p class="text-xl text-gray-500 line-through">$' . number_format($this->price, 2) . '</p>';
        }

        echo '
                        
                         <p class="text-3xl text-gray-900">$' . number_format($discountResult['discountedPrice'], 2) . ' (-' . $discountPercentage . '%)</p>
                        <p class="text-gray-700">' . $this->address . '</p>
                    </div>
                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">' . $this->bedrooms . '</span> Bedrooms</p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 4v5l-4 4 4 4v5h4v-5l4 4 4-4v-5h4V4H6zm2 2h10v1.49L12 13l-4-4V6h-2v2z"></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">' . $this->bathrooms . '</span> Bathrooms</p>
                        </div>
                    </div>
                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                            </svg>
                            <p>Contact: ' . $this->contactPhone . '</p>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }



}

require_once('DB.php');
$conn=connect();

$showMoreHouses = isset($_GET['houses']) ? intval($_GET['houses']) : 3;
$query = "SELECT * FROM Houses LIMIT ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $showMoreHouses);
$stmt->execute();

$result = $stmt->get_result();

$stmt->close();
close($conn);



//class ContactInformation {
//    public $name;
//    public $email;
//    public $phoneNumber;
//    public $message;
//
//    public function __construct($name, $email, $phoneNumber, $message) {
//        $this->name = $name;
//        $this->email = $email;
//        $this->phoneNumber = $phoneNumber;
//        $this->message = $message;
//    }
//}
//
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//
//    $name = $_POST["name"];
//    $email = $_POST["email"];
//    $phoneNumber = $_POST["phone"];
//    $message = $_POST["message"];
//
//    $contactInfo = new ContactInformation($name, $email, $phoneNumber, $message);
//
//
//}




        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once('DB.php');
            $conn=connect();

            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $message=$_POST['message'];

            $nameDB = mysqli_real_escape_string($conn, $name);
            $emailDB = mysqli_real_escape_string($conn, $email);
            $phoneDB = mysqli_real_escape_string($conn, $phone);
            $messageDB = mysqli_real_escape_string($conn, $message);


            $sql = "INSERT INTO CONTACTS (NameDB, EmailDB,PhoneDB, MessDB) VALUES ('$nameDB', '$emailDB ', '$phoneDB', '$messageDB')";
            if ($conn->query($sql) === TRUE) {
                $mes='Дані успішно відправлені в базу даних.';

            } else {
                $mes='ПОМИЛКА';
            }
            close($conn);
    }



?>