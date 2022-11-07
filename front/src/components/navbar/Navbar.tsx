import { useContext } from "react";
import { Navbar } from "react-daisyui";
import { Link } from "react-router-dom";
import { UserContext } from "../../App";

export default function NavbarComponent() {
    const user = useContext(UserContext);
    console.log(user);
    return (
        <>
            <div className="flex w-full component-preview p-4 items-center justify-center gap-2 font-sans">
                <Navbar className='flex justify-between'>
                    <div className="flex space-x-4">
                        <Link to="/" className="text-xl normal-case">
                            Anim' Assoc
                        </Link>
                        <Link to="/animals" className="text-xl normal-case">
                            Animals
                        </Link>
                    </div>
                    <div className="flex space-x-4">
                        {user ? (
                            <span className="text-xl normal-case">
                                {user.firstName} {user.lastName}
                            </span>
                        ) : (
                            <>
                                <Link to="/signin" className="text-xl normal-case">
                                    Register
                                </Link>
                                <Link to="/login" className="text-xl normal-case">
                                    Login
                                </Link>
                            </>
                        )}
                        <Link to="/cart" className="text-xl normal-case">
                            Cart
                        </Link>
                    </div>
                </Navbar>
            </div >
        </>
    );
}