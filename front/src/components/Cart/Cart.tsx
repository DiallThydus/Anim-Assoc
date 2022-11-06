export default function Cart() {
	const summaryItemStyle = "SummaryItem flex justify-between mt-3 w-[100%]";
	const productDivStyle = "flex w-[100%] h-auto items-center mobile:flex-col";
	const priceQuantityStyle =
		"flex-auto flex flex-col justify-center items-center mobile:mt-7 mobile:mb-7";
	return (
		<div>
			<div className="p-3">
				<div className="flex justify-center text-5xl">
					Cart
				</div>
				<div className="flex items-center justify-between mt-4 mobile:flex-col">
					<button className="btn bg-white text-[#8a4af3] border-2 border-[#8a4af3] mt-0">
						Continue
					</button>
					<div className="flex underline text-lg hover:cursor-pointer mobile:m-5">
						<p>Items in your Cart: 3</p>
						<p className="ml-5">Whishlist Items: 0</p>
					</div>
					<button className="btn mt-0">Checkout Now</button>
				</div>
				<div className="flex flex-row mt-7 mobile:flex-col">
					<div className="flex flex-col flex-1">
						<div className={productDivStyle}>
							<div className=" product flex pl-5 self-start">
								<img
									className="product_img w-[7rem]"
									src=""
									alt="product_img"
								/>

								<div className="disc flex items-start justify-between h-auto flex-col ml-6">
									<p>
										<b className="mr-2">ID:</b>123456789
									</p>
									<p>
										<b className="mr-2">Product:</b>Chien
									</p>
									<p className="flex items-center justify-center">
										<b className="mr-2">Age</b>age
									</p>
									<p>
										<b className="mr-2">Race</b>race
									</p>
								</div>
							</div>
							<div className={priceQuantityStyle}>
								<p className="flex items-center justify-center text-4xl mt-3">
									<b>Disponible + Product</b>
								</p>
							</div>
						</div>
						<hr className="mb-7 mt-7 mobile:mt-0" />
						<div className={productDivStyle}>
							<div className=" product flex pl-5 self-start">
								<img
									className="product_img w-[7rem]"
									src=""
									alt="product_img"
								/>
								<div className="disc flex items-start justify-between h-auto flex-col ml-6">
									<p>
										<b className="mr-2">ID:</b>123456789
									</p>
									<p>
										<b className="mr-2">Product:</b>chat
									</p>
									<p className="flex items-center justify-center">
										<b className="mr-2">age</b>age
									</p>
									<p>
										<b className="mr-2">race</b>race
									</p>
								</div>
							</div>
							<div className={priceQuantityStyle}>
								<p className="flex items-center justify-center text-4xl mt-3">
									<b>Disponible + Product</b>
								</p>
							</div>
						</div>
						<hr className="mb-7 mt-7 mobile:mt-0" />
						<div className={productDivStyle}>
							<div className=" product flex pl-5 self-start">
								<img
									className="product_img w-[7rem]"
									src=""
									alt="product_img"
								/>

								<div className="disc flex items-start justify-between h-auto flex-col ml-6">
									<p>
										<b className="mr-2">ID:</b>123456789
									</p>
									<p>
										<b className="mr-2">Product:</b>Rongeur
									</p>
									<p className="flex items-center justify-center">
										<b className="mr-2">Age</b>age
									</p>
									<p>
										<b className="mr-2">Race</b>race
									</p>
								</div>
							</div>
							<div className={priceQuantityStyle}>
								<p className="flex items-center justify-center text-4xl mt-3">
									<b>Disponible + Product</b>
								</p>
							</div>
						</div>
						<hr className="mb-7 mt-7 mobile:mt-0" />
					</div>
					<div className="Summary flex-[0.4] flex flex-col items-center w-auto h-[40vh] border-2 border-[#8a4af3] rounded-md shadow-lg p-5 text-lg mobile:mb-6">
						<h1 className="text-[2rem]">SUMMARY</h1>
						<div className={summaryItemStyle}>
							<p>SubTotal:</p>
							<p>$140</p>
						</div>
						<div className={summaryItemStyle + " text-3xl font-bold"}>
							<p>Total:</p>
							<p>$140</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
};