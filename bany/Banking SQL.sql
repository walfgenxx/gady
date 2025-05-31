-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2025 at 10:44 PM
-- Server version: 10.11.11-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fxcoinprofit_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(200) NOT NULL,
  `accountid` int(200) DEFAULT NULL,
  `acc_number` int(200) DEFAULT NULL,
  `acc_type` varchar(300) DEFAULT NULL,
  `acc_name` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `acc_serial` varchar(300) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_managers`
--

CREATE TABLE `account_managers` (
  `id` int(200) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `manager_id` bigint(200) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account_managers`
--

INSERT INTO `account_managers` (`id`, `name`, `email`, `manager_id`, `updated`, `date`, `updated_by`) VALUES
(1, 'Prince Wilson', 'princewilsonshow93@gmail.com', 784787, '2024-04-12 16:44:58', '2023-02-24 21:44:31', '700078'),
(3, 'Emilia Marie', 'emiliamarie231@gmail.com', 531939, '2023-03-07 16:18:21', '2023-03-06 08:30:53', '700078');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `bankid` varchar(300) DEFAULT NULL,
  `bankname` varchar(300) DEFAULT NULL,
  `bankaddress` text DEFAULT NULL,
  `accountnumber` varchar(300) DEFAULT NULL,
  `accountname` varchar(300) DEFAULT NULL,
  `swift` varchar(300) DEFAULT NULL,
  `routing` varchar(300) DEFAULT NULL,
  `serial` text DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `userid` int(200) DEFAULT NULL,
  `billid` int(200) DEFAULT NULL,
  `amount` decimal(65,0) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `btc_transactions`
--

CREATE TABLE `btc_transactions` (
  `id` int(200) NOT NULL,
  `userid` int(200) DEFAULT NULL,
  `transactionid` varchar(300) DEFAULT NULL,
  `amount` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `action` varchar(200) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `ip` varchar(300) DEFAULT NULL,
  `browser` text DEFAULT NULL,
  `transkey` varchar(300) DEFAULT NULL,
  `transaction_serial` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `bankname` varchar(300) DEFAULT NULL,
  `category` varchar(300) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `previous_date` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `userid` int(200) DEFAULT NULL,
  `cardid` int(100) NOT NULL,
  `cardnumber` varchar(200) NOT NULL,
  `month` int(200) DEFAULT NULL,
  `year` int(200) DEFAULT NULL,
  `cardcvv` int(200) NOT NULL,
  `cardtype` varchar(200) DEFAULT NULL,
  `cardserial` varchar(300) DEFAULT NULL,
  `balance` int(200) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(200) NOT NULL,
  `goalid` int(200) DEFAULT NULL,
  `userid` int(200) DEFAULT NULL,
  `amount` decimal(65,0) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `goalpercent` int(200) NOT NULL,
  `category` varchar(200) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyc`
--

CREATE TABLE `kyc` (
  `id` int(11) NOT NULL,
  `kycid` varchar(300) DEFAULT NULL,
  `userid` varchar(300) DEFAULT NULL,
  `image_front` text DEFAULT NULL,
  `image_back` text DEFAULT NULL,
  `doctype` varchar(300) DEFAULT NULL,
  `docnumber` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `serial` text DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `userid` bigint(200) DEFAULT NULL,
  `duration` varchar(300) DEFAULT NULL,
  `amount` varchar(300) DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `loanid` varchar(300) DEFAULT NULL,
  `serial` text DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `percentage` varchar(300) DEFAULT NULL,
  `rate` varchar(300) DEFAULT NULL,
  `payback` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(134) DEFAULT NULL,
  `image` varchar(134) DEFAULT NULL,
  `slug` varchar(134) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regusers`
--

CREATE TABLE `regusers` (
  `id` int(200) NOT NULL,
  `userid` int(200) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `ssn` varchar(300) DEFAULT NULL,
  `country` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `firstname` varchar(300) DEFAULT NULL,
  `lastname` varchar(300) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(200) NOT NULL,
  `sitename` varchar(300) DEFAULT NULL,
  `sitecolor` varchar(300) DEFAULT NULL,
  `sitemail` varchar(300) DEFAULT NULL,
  `sitemail2` varchar(300) DEFAULT NULL,
  `sitedesc` text DEFAULT NULL,
  `sitedomain` varchar(300) DEFAULT NULL,
  `livechat` text DEFAULT NULL,
  `livechaturl` varchar(300) DEFAULT NULL,
  `logo` varchar(300) DEFAULT NULL,
  `favicon` varchar(300) DEFAULT NULL,
  `thumb` varchar(300) DEFAULT NULL,
  `sitecountry` varchar(300) DEFAULT NULL,
  `minimumdeposit` int(200) DEFAULT NULL,
  `sitecurrency` varchar(200) DEFAULT NULL,
  `transfercode_name` varchar(300) DEFAULT NULL,
  `withdrawcode_name` varchar(300) DEFAULT NULL,
  `sitecurrencysym` varchar(200) DEFAULT NULL,
  `bankname` varchar(300) DEFAULT NULL,
  `siteterms` text DEFAULT NULL,
  `disable_registration` varchar(200) DEFAULT NULL,
  `preloader` varchar(200) DEFAULT NULL,
  `withdraw_error` text DEFAULT NULL,
  `transfer_error` text DEFAULT NULL,
  `regcode` int(200) DEFAULT NULL,
  `webmail_email` varchar(300) DEFAULT NULL,
  `webmail_email_password` varchar(300) DEFAULT NULL,
  `default_timezone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `sitecolor`, `sitemail`, `sitemail2`, `sitedesc`, `sitedomain`, `livechat`, `livechaturl`, `logo`, `favicon`, `thumb`, `sitecountry`, `minimumdeposit`, `sitecurrency`, `transfercode_name`, `withdrawcode_name`, `sitecurrencysym`, `bankname`, `siteterms`, `disable_registration`, `preloader`, `withdraw_error`, `transfer_error`, `regcode`, `webmail_email`, `webmail_email_password`, `default_timezone`) VALUES
(1, 'Online Banking', '#048566', 'support@webproject.net.ng', '', 'Checkings, Savings, and Loans online banking', 'webproject.net.ng', '', '', '../logo.png', '../fav.png', '../fav.png', 'United State', 20, 'USD', 'OTP Code', 'UCH Code', '$', 'M&T Bank', '<h3>1. General Description of World Online Bank Service Agreement (this &quot;Agreement&quot;)</h3>\r\n\r\n<h4>A. What This Agreement Covers</h4>\r\n\r\n<p>This Agreement is between each owner of an eligible account, a person applying for an eligible account, or an authorized representative appointed or entitled to online access on another person&rsquo;s behalf (&ldquo;you&rdquo; or &ldquo;your&rdquo;) and World Online Bank, N.A. (World Online Bank).&nbsp; This Agreement governs your use of any online or mobile banking services maintained by World Online Bank and accessible through mymoney-online.com using a personal computer or a mobile device, including a smartphone, tablet, or any other eligible handheld or wearable communication device (the &ldquo;Service(s)&rdquo;).</p>\r\n\r\n<p>Under the terms of this Agreement, you may use the Services to obtain financial products and services, access and view account information, and, for certain accounts, move money electronically and perform authorized transactions, for eligible U.S.-based World Online Bank consumer and small business accounts and affiliate accounts linked to the Service, such as those at Merrill Lynch, Pierce, Fenner &amp; Smith Incorporated (&quot;Merrill&quot;).</p>\r\n\r\n<p>When used in the Agreement, the term &ldquo;small business&rdquo; includes sole proprietors, non-consumer business entities, and individual owners of the business, unless the context indicates otherwise. If you are a small business customer, additional or different terms and conditions applicable to the Services, as well as additional Services available exclusively to small business customers, are included in the Business Services Addendum, which is a part of this Agreement.</p>\r\n\r\n<p>When you first set up your Online/Mobile ID, we will link all of your eligible World Online Bank and affiliate accounts, including joint accounts. If you open an additional eligible account at a later date, we will link your new account to the Service, unless you tell us not to do so. Unless indicated otherwise by the context, &quot;linked World Online Bank accounts&quot; or &quot;linked accounts&quot; refers to all of your accounts with World Online Bank and its affiliates that are linked to the Service.</p>\r\n\r\n<p>When your Service is linked to one or more joint accounts, we may act on the verbal, written, or electronic instructions of any authorized signer.</p>\r\n\r\n<p>Please note that some of the Services may not be available at all times or when using certain digital devices or applications. For example, some functions may be available online through a personal computer but not available through our mobile app.</p>\r\n\r\n<h4>B. Accepting the Agreement</h4>\r\n\r\n<p>When you apply for, enroll in, activate, download, or use any of the Services described in this Agreement or authorize others to do so on your behalf, you are contracting for all Services described in the Agreement and agree to be bound by the terms and conditions of the entire Agreement, as well as any terms and instructions that appear on a screen when enrolling in, activating or accessing the Services.</p>\r\n\r\n<h4>C. Relation to Other Agreements</h4>\r\n\r\n<p>Your use of the Services may also be affected by your Deposit Agreement and Disclosures, including the applicable schedule of fees (&ldquo;Deposit Agreement&rdquo;), or other agreement with us for your linked World Online Bank accounts and/or an agreement with our affiliates for your affiliate accounts linked to the Service, including your investment accounts at Merrill. When an account is linked to the Services, it does not change the agreements you already have with us or our affiliates for that account and you are still subject to the terms and conditions we gave you in the agreement and disclosure for the linked account. The terms and conditions for those account agreements, including any applicable fees, transaction limitations, liability rules, and other restrictions that might impact your use of an account with the Services, are incorporated into this Agreement. &nbsp;In the event of a conflict between the terms of those account agreements and this Agreement, the terms of the applicable account agreement will prevail unless this Agreement specifically states otherwise.</p>\r\n\r\n<p>If you use the Services to move money between your investment accounts governed by the Merrill Lynch Brokerage Website Terms and Conditions, which you agreed to when you became a Merrill online customer, that agreement, and not this Agreement will apply to your transaction.</p>', 'no', 'No', 'Try again in few minutes', 'Try again in few minutes', 231, 'noreply@webproject.net.ng', '##webproject2025', 'America/Anchorage');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `userid` bigint(200) DEFAULT NULL,
  `ticketid` varchar(300) DEFAULT NULL,
  `ticketkey` varchar(300) DEFAULT NULL,
  `amount` varchar(300) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `section` varchar(300) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `btc_amount` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `serial` text DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(200) NOT NULL,
  `userid` int(200) DEFAULT NULL,
  `transactionid` varchar(300) DEFAULT NULL,
  `amount` decimal(65,0) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `action` varchar(200) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `ip` varchar(300) DEFAULT NULL,
  `browser` text DEFAULT NULL,
  `transkey` varchar(300) DEFAULT NULL,
  `transaction_serial` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `bankname` varchar(300) DEFAULT NULL,
  `category` varchar(300) DEFAULT NULL,
  `method` varchar(300) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `previous_date` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `userid` int(200) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `creator` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `accountnumber` varchar(300) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `realpassword` varchar(300) DEFAULT NULL,
  `ban` varchar(200) DEFAULT NULL,
  `balance` decimal(65,0) NOT NULL,
  `accountcode` int(200) DEFAULT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL,
  `logincounts` int(200) DEFAULT NULL,
  `lastloginip` varchar(300) DEFAULT NULL,
  `lastloginbrowser` text DEFAULT NULL,
  `country` varchar(300) DEFAULT NULL,
  `state` varchar(300) DEFAULT NULL,
  `city` varchar(300) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `phone` varchar(300) DEFAULT NULL,
  `depositban` varchar(200) DEFAULT NULL,
  `firstname` varchar(300) DEFAULT NULL,
  `security` varchar(200) DEFAULT NULL,
  `lastname` varchar(300) DEFAULT NULL,
  `gender` varchar(300) DEFAULT NULL,
  `pics` varchar(300) DEFAULT NULL,
  `withdrawban` varchar(200) DEFAULT NULL,
  `transferban` varchar(200) DEFAULT NULL,
  `account_serial` varchar(200) DEFAULT NULL,
  `routing` varchar(300) DEFAULT NULL,
  `bankname` varchar(300) DEFAULT NULL,
  `income` decimal(65,0) DEFAULT NULL,
  `expenses` decimal(65,0) DEFAULT NULL,
  `savings` decimal(65,0) DEFAULT NULL,
  `banklogo` text DEFAULT NULL,
  `mycolor` varchar(300) DEFAULT NULL,
  `logobackground` varchar(300) DEFAULT NULL,
  `mycurrency` varchar(300) DEFAULT NULL,
  `mycurrencysym` text DEFAULT NULL,
  `mywithdraw_error` text DEFAULT NULL,
  `mytransfer_error` text DEFAULT NULL,
  `load_account` varchar(300) DEFAULT NULL,
  `debit_account` varchar(300) DEFAULT NULL,
  `edit_profile` varchar(300) DEFAULT NULL,
  `transfercode` int(200) NOT NULL,
  `withdrawcode` int(200) NOT NULL,
  `otherbills` decimal(65,0) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `transfercode_name` varchar(300) DEFAULT NULL,
  `withdrawcode_name` varchar(300) DEFAULT NULL,
  `pendingbalance` varchar(300) DEFAULT NULL,
  `notice` text DEFAULT NULL,
  `balance2` decimal(65,0) DEFAULT NULL,
  `accountnumber2` int(200) DEFAULT NULL,
  `btc_balance` varchar(300) DEFAULT NULL,
  `bankid` varchar(300) DEFAULT NULL,
  `loanaccess` varchar(300) DEFAULT NULL,
  `kyc` varchar(300) DEFAULT NULL,
  `accounttype` varchar(300) DEFAULT NULL,
  `marital` varchar(300) DEFAULT NULL,
  `job` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `username`, `creator`, `email`, `accountnumber`, `status`, `role`, `password`, `realpassword`, `ban`, `balance`, `accountcode`, `lastlogin`, `logincounts`, `lastloginip`, `lastloginbrowser`, `country`, `state`, `city`, `address`, `phone`, `depositban`, `firstname`, `security`, `lastname`, `gender`, `pics`, `withdrawban`, `transferban`, `account_serial`, `routing`, `bankname`, `income`, `expenses`, `savings`, `banklogo`, `mycolor`, `logobackground`, `mycurrency`, `mycurrencysym`, `mywithdraw_error`, `mytransfer_error`, `load_account`, `debit_account`, `edit_profile`, `transfercode`, `withdrawcode`, `otherbills`, `updated`, `date`, `transfercode_name`, `withdrawcode_name`, `pendingbalance`, `notice`, `balance2`, `accountnumber2`, `btc_balance`, `bankid`, `loanaccess`, `kyc`, `accounttype`, `marital`, `job`) VALUES
(1, 254546, 'carrie', '254546', 'carrieunderwood2mail@gmail.com', '4319192799', 'active', 'admin', '21eb97ba4355ca1f4a0bd69967daa3c0', '348129', NULL, 728886, 9821, '2025-05-03 19:46:00', 166, '102.91.4.160', 'Mozilla Firefox 137.0 on windows reports: <br >Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:137.0) Gecko/20100101 Firefox/137.0', 'United States of America', 'Tennessee', 'El Cajon', '8 Wentworth Pl, Brentwood', '13614282131', 'no', 'Carrie', 'yes', 'Underwood', 'female', 'carrie-789149.jpg', 'no', 'no', 'ac9wRXh8IeNOG1ySztdrub6v5MY0jK4Q', '021000021', 'Chase Bank', 208900, 166999, 190858, 'https://i.ibb.co/k8yCZTQ/maks.png', '#048566', '#ffffff', 'USD', '$', 'You need to update your tax to withdraw', '', 'yes', 'yes', 'yes', 454871, 147518, NULL, '2023-06-18 11:56:32', '2022-08-23 16:29:24', 'UCH Code', 'UMF Code', '2100018.6', 'Weâ€™ve restricted your account temporarily.', 42100, 2147483647, NULL, NULL, NULL, 'no', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(200) NOT NULL,
  `walletid` int(200) DEFAULT NULL,
  `wallet` text DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_managers`
--
ALTER TABLE `account_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btc_transactions`
--
ALTER TABLE `btc_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regusers`
--
ALTER TABLE `regusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_managers`
--
ALTER TABLE `account_managers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `btc_transactions`
--
ALTER TABLE `btc_transactions`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regusers`
--
ALTER TABLE `regusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
